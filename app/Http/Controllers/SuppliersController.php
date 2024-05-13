<?php

namespace App\Http\Controllers;

use App\Services\Multipart;
use App\Services\TimbuAPI;
use App\Services\TypesenseAPI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SuppliersController extends Controller
{
    protected mixed $base_url;
    protected $country;
    protected $supplierService;
    protected $config;
    protected $base_curr_code;
    protected mixed $organization_id;
    protected mixed $sitename;
    protected $api;
    protected $client;
    protected $multipart;

    public function __construct()
    {
        $this->api =new TimbuAPI();
        $this->client = new TypesenseAPI();
        $this->config = config('siteConfig.sitewide');
        $this->base_curr_code = env('DEF_CURRENCY_CODE') ?: 'NGN';
        $this->organization_id = $this->config['ORGANIZATION_ID'];
        $this->country = $this->config['COUNTRY'];
        $this->base_url = $this->config['BASE_URL'];
        $this->sitename = $this->config['SITENAME'];
        $this->multipart = new Multipart();
    }

    public function index (){
        return response()->json([
            "message" => "Welcome to Timbu seller dashboard",
        ]);
    }
    

    public function country(){
        $countries = $this->api->get("/countries/codes");
        $states = $this->api->get("/countries/NGA/states");
        $country_flag = $this->api->get("/countries");
        
        $country_flag = $country_flag->getResponse();
        $states = $states->getResponse();
        $countries = $countries->getResponse();

        $page_data["countries"] = $countries;
        $page_data["country_flag"] = $country_flag;
        $page_data["states"] = $states;

        return response()->json([
            "page_data" => $page_data,
        ]);
    }

    public function country_state(){
        $code = Request()->code;
        $state = $this->api->get("/countries/$code/states");
        $state = $state->getResponse();
        
        return response()->json([
            "data" => $state->states,
        ]);
    }

    public function create_supplier(Request $request){

        $payload = [
            "organization_id" =>  $this->organization_id,
            "business_name" => $request->business_name,
            "password" => $request->password,
            "contact_infos" => [
                [
                    "contact_data" => $request->phone ?? null,
                    "contact_type" => "phone_number",
                    "phone_country_code" => "+234",
                ],
                [
                    "contact_data" => $request->email ?? null,
                    "contact_type" => "email",
                ]
            ],
            "supplier_locations" => [
                [
                    "state" => $request->state,
                    "country" =>  $request->country,                    
                    "full_address" =>  $request->address, 
                ]
            ],  //locations
            "extra_info" => [
                [
                    "key" => "name",
                    "value" => $request->name,
                ]
            ]  
        ];

        $supplier = $this->api->post('/suppliers', $payload);
        if(!$supplier->isSuccessful()){
            return response()->json([
                "message" => $supplier->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "message" => "supplier is created successfully",
            "data" => $supplier->getResponse()
        ], 201);
    }

    public function update_supplier(Request $request, $supplierId){

        $payload = [
            "organization_id" =>  $this->organization_id,
            "business_name" => $request->business_name,
            "contact_infos" => [
                [
                    "contact_data" => $request->phone,
                    "contact_type" => "phone_number",
                    "phone_country_code" => "+234",
                ],
                [
                    "contact_data" => $request->email,
                    "contact_type" => "email",
                ]
            ],
            "supplier_locations" => [
                [
                    "state" => $request->state,
                    "country" =>  $request->country,                    
                    "full_address" =>  $request->address, 
                ]
            ],    
        ];

        $supplier = $this->api->put("/suppliers/$supplierId", $payload);

        if(!$supplier->isSuccessful()){
            return response()->json([
                "message" => $supplier->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "data" => $supplier->getResponse()
        ], 201);
    }
    
    public function get_supplier(Request $request, $supplierId){        
        return $this->multipart->formatMultipartForm("suppliers/$supplierId", [], "GET"); 
    }


    public function signin(Request $request){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "password" => $request->password,
            "email" => $request->email,
            "app_url" => "http://127.0.0.1:5173/reset-password",
            "biz_partner_type" => "supplier",
        ];

        $reservation = $this->api->post('/auth/biz_partner-login', $payload);
        if(!$reservation->isSuccessful()){
            return response()->json([
                "message" => $reservation->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "Login was successful",
            "data" => $reservation->getResponse()
        ], 200);
    }

    public function signup(Request $request){

        $payload = [
            "organization_id" =>  $this->organization_id,
            "first_name" => $request->firstname,
            "last_name" => $request->lastname,
            "email" => $request->email,
            "password" => $request->password,
            "phone_number" => $request->phone_number,
        ];

        $reservation = $this->api->post('/auth/signup', $payload);
        if(!$reservation->isSuccessful()){
            return response()->json([
                "message" => $reservation->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "message" => "supplier is created successfully",
            "data" => $reservation->getResponse()
        ], 201);
    }

    public function create_product(Request $request) {
        $payload = [
            "organization_id" =>  $this->organization_id,
            "name" => $request->name,
            "description" => $request->description,
            "quantity" => $request->quantity,
            "suppler_id" => $request->suppler_id ?? null,
            "buying_price" => $request->buying_price,
        ];

        
        if($request->file('file')){
            $imageArry = [];
            for($i = 0 ; $i < count($request->file('file')) ; $i++){         
                $imageArry[] = curl_file_create($request->file('file')[$i], 'image/jpeg', 'image.jpg');
            }
            $payload["product_image"] =  $imageArry[0];
        }
        

        $prod_id = $this->multipart->formatMultipartForm("products", $payload, "POST");

        $stock =  $this->create_stock($prod_id->id, $request->suppler_id);
        $stock_id = $stock->original["data"]->id;
        $price = $this->create_product_price($prod_id->id, $stock_id);

        return response()->json([
            "status" => 201,
            "message" => "product was created successful",
            "product" => $prod_id,
            "stock" => $stock,
            "price" => $price,
        ], 201);
    }

    public function create_stock($prod_id, $supplierId){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "name" => request()->name,
            "description" => request()->description,
            "quantity" => request()->quantity ?? 1,
            "currency_code" => $this->base_curr_code,
            "supplier_id" => $supplierId,
            "product_id" => $prod_id,
            "buying_price" => request()->buying_price,
        ];

        $reservation = $this->api->post('/stocks', $payload);   
        
        if(!$reservation->isSuccessful()){
            return response()->json([
                "message" => $reservation->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "message" => "Stock was created successful",
            "data" => $reservation->getResponse()
        ], 201);
    }

    public function create_product_price($prod_id, $stock_id){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "currency_code" => $this->base_curr_code,
            "stock_id" => $stock_id,
            "product_id" => $prod_id,
            "discounted_price" => request()->discounted_price ?? 0,
            "price" => request()->buying_price,
            "monday" => true,
            "tuesday" => true,
            "wednesday" => true,
            "thursday" => true,
            "friday" => true,
            "saturday" => true,
            "sunday" => true,
            "start"=> request()->start ?  Carbon::createFromFormat('d-m-Y', request()->start)->format('Y-m-d H:i:s') : "2023-04-14",
            "end"=> request()->end ?  Carbon::createFromFormat('d-m-Y', request()->end)->format('Y-m-d H:i:s') : "2024-05-18",
        ];

        $response = $this->api->post('/prices', $payload);   
        
        if(!$response->isSuccessful()){
            return response()->json([
                "message" => $response->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "price" => $response->getResponse()
        ], 201);
    }

    public function get_product(){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "supplier_id" => request()->supplier_id,
        ];

        $product = $this->api->get('/products', $payload);
        
        if(!$product->isSuccessful()){
            return response()->json([
                "message" => $product->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "fetch product successfully",
            "data" => $product->getResponse()
        ], 200);
    }

    public function get_product_price(){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "product_id" => request()->product_id,
        ];

        $product = $this->api->get('/prices', $payload);
        
        if(!$product->isSuccessful()){
            return response()->json([
                "message" => $product->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "fetch product price successfully",
            "data" => $product->getResponse()
        ], 200);
    }

    public function product_by_id($id){
        $org_id = $this->organization_id;

        $product = $this->api->get("/products/$id", ["organization_id" => $org_id]);
        if(!$product->isSuccessful()){
            return response()->json([
                "message" => $product->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "fetch product successfully",
            "data" => $product->getResponse()
        ], 200);
    }

    public function update_product($id){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "name" => request()->name,
            "description" => request()->description,
            "quantity" => request()->quantity,
            "suppler_id" => request()->suppler_id ?? null,
            "buying_price" => request()->buying_price,
        ];

        
        if(request()->file('file')){
            $imageArry = [];
            for($i = 0 ; $i < count(request()->file('file')) ; $i++){         
                $imageArry[] = curl_file_create(request()->file('file')[$i], 'image/jpeg', 'image.jpg');
            }
            $payload["product_image"] =  $imageArry[0];
        }

        $prod =  $this->multipart->formatMultipartForm("products/$id", $payload, "PUT");
        $price = $this->update_product_price(request()->price_id); 

        return response()->json([
            "status" => 201,
            "message" => "product was created successful",
            "product" => $prod,
            "price" => $price,
        ], 201);
    }

    public function update_product_price($price_id){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "currency_code" => $this->base_curr_code,
            "product_id" => request()->prod_id,
            "discounted_price" => request()->discounted_price ?? 0,
            "price" => request()->buying_price,
            "monday" => true,
            "tuesday" => true,
            "wednesday" => true,
            "thursday" => true,
            "friday" => true,
            "saturday" => true,
            "sunday" => true,
            "start"=> request()->start ?  Carbon::createFromFormat('d-m-Y', request()->start)->format('Y-m-d H:i:s') : "2023-04-14",
            "end"=> request()->end ?  Carbon::createFromFormat('d-m-Y', request()->end)->format('Y-m-d H:i:s') : "2024-05-18",
        ];
        
        $response = $this->api->put("/prices/$price_id", $payload); 
        
        if(!$response->isSuccessful()){
            return response()->json([
                "message" => $response->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "price" => $response->getResponse()
        ], 201);
    }

    public function delete_product($id){
        $payload = [
            "organization_id" =>  $this->organization_id,
        ];

        $product = $this->api->delete("/products/$id", [], $payload);        

        if(!$product->isSuccessful()){
            return response()->json([
                "message" => $product->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "message" => "product is deleted successfully",
            "data" => $product->getResponse()
        ], 201);
    }

    public function reset_password(Request $request){
        $query = [
            'token'=> $request->token,
            'password'=> $request->password,
        ];

        $url = "https://api.timbu.cloud/auth/reset-biz_partner-password";
        $data = http_build_query($query);
        $getUrl = $url."?".$data;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $getUrl,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => array(
            "Cache-Control: no-cache",
            "Content-Type: application/json"
            ),
            CURLOPT_POSTFIELDS => json_encode($query),
        ));
        
        $res = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($res);

        if($data->detail ?? null){
            return response()->json([
                "message" => $data->detail,
            ], 400);
        }
        
        return response()->json([
            "status" => 200,
            "message" => "password reset successfully",
            "data" => $data
        ], 200);
    }

    public function get_sales(){
        $payload = [
            "organization_id" =>  $this->organization_id,
            "biz_partner_id" => request()->biz_partner_id,
            "size" => 10,
        ];

        $product = $this->api->get('/sales', $payload);
        
        if(!$product->isSuccessful()){
            return response()->json([
                "message" => $product->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "fetch sales successfully",
            "data" => $product->getResponse()
        ], 200);
    }

    public function get_supplier_from_index(){
        $filter = "locations.country:=[$this->country] && organization_id:=[$this->organization_id]";

        $response = $this->client->get(
            env("SUPPLIERS_COLLECTION") ?? "suppliers_2024_03_29_1711698952",
            [
                'q' => request()->search_value ?? "*",
                'filter_by' => $filter ,
                'page' => 1,
                'query_by' => "business_name"
            ]
        );
        
        if(!$response->isSuccessful()){
            return response()->json([
                "message" => $response->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "Hotel found",
            "data" => $response->getResponse()
        ], 200);
            
    }

    public function build_supplier_details(){
        $products = $this->get_product();
        $sales = $this->get_sales();
        
        return response()->json([
            "status" => 200,
            "message" => "Supplier details",
            "products_count" => $products->original["data"]->total,
            "sales_count" => $sales->original["data"]->total,
        ], 200);
    }

    public function add_product_price(){
        $payload = [
            "name" => request()->name,
            "organization_id" =>  $this->organization_id,
            "currency_code" => $this->base_curr_code,
            "stock_id" => request()->stock_id,
            "product_id" => request()->product_id,
            "discounted_price" => request()->discounted_price ?? 0,
            "price" => request()->buying_price,
            "monday" => true,
            "tuesday" => true,
            "wednesday" => true,
            "thursday" => true,
            "friday" => true,
            "saturday" => true,
            "sunday" => true,
            "start"=> request()->start ?  Carbon::createFromFormat('d-m-Y', request()->start)->format('Y-m-d H:i:s') : "2023-04-14",
            "end"=> request()->end ?  Carbon::createFromFormat('d-m-Y', request()->end)->format('Y-m-d H:i:s') : "2024-05-18",
        ];

        $response = $this->api->post('/prices', $payload);   
        
        if(!$response->isSuccessful()){
            return response()->json([
                "message" => $response->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 201,
            "price" => $response->getResponse()
        ], 201);
    }

    public function delete_product_image(){
        $payload = [
            "organization_id" =>  $this->organization_id,
        ];

        $product_id = request()->id ?? null;
        $image_fileName = request()->fileName ?? null;

        $response = $this->api->delete("/products/image/$product_id/$image_fileName", $payload, []);
        
        if(!$response->isSuccessful()){
            return response()->json([
                "message" => $response->getMessage(),
            ], 400);
        }

        return response()->json([
            "status" => 200,
            "message" => "product image deleted successfully",
            "data" => $response->getResponse()
        ], 200);
    }
}
