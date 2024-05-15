@extends("layouts.app")

@section('title')
Contact Us | Prime trast multiverse 
@endsection

@section("content")

<div class="landing contact all">
  <x-main-nav :contact="true"></x-main-nav>

  <div class="main">
    <div class="row mt-5">
        <div class="col-sm-6 mb-5">
            <div class="text">
                <h3 class="fw-bold mb-4">Get In <span class="span">Touch</span></h3>
                <p>Reach out and let's start a conversation. Together, we'll turn your ideas into reality. Looking forward to hearing from you!</p>
                <p class="">Ready to <span class="span fw-bold">build</span> something remarkable? Let's lay the foundation for success together. Whether it's designing your dream home, revitalizing a commercial space, or embarking on a large-scale construction project, our team is here to make it happen.</p>
                <p> With a focus on quality, innovation, and client satisfaction, we bring expertise and dedication to every <span class="span fw-bold">job</span> site. Get in touch today, and let's start building the future together. Your vision, our craftsmanship – let's construct greatness.</p>
                
                <li class="mt-3"><a href="tel:+2348091810342"><i class="fa-solid mx-2 fa-phone"></i> +2348091810342</a></li>
                <li><a href=""><i class="fa-solid mx-2 fa-envelope"></i> company@ptmvlimited.com</a></li>
                <li><a href=""><i class="fa-solid fa-location-dot mx-2"></i> 19 Chelsea Chibuzor street Katampe Abuja</a></li>

                <div class="d-flex mt-4">
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6">
            @if (session("error_msg"))                
                <p class="text-center fw-semibold text-danger">{{session("error_msg")}}.</p>
            @endif
            @if (session("success_msg"))                
                <p class="text-center fw-semibold text-success">{{session("success_msg")}}.</p>
            @endif

            <div class="form">
                <form class="forms" action="send-mail" method="GET">
                    @csrf
                    <h3 class="fw-bold mb-3"><span class="span">Message</span> Us</h3>
                    <div class="d-flex">
                        <input required name="name" type="text" style="margin-right: .5em" placeholder="Enter your name">
                        <input required name="email" type="email" style="margin-left: .5em" placeholder="Your email">
                    </div>
                    <input required name="subject" type="text" placeholder="Subject">
                    <textarea required name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <button class="btn submit_btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
  </div>

</div>

<x-footer></x-footer>

@push("javascript")

<script>
    var submit_btn = document.querySelector(".submit_btn")
    var forms = document.querySelector(".forms")

    forms.addEventListener("submit", () => {
        submit_btn.innerHTML = `Processing <div class="spinner-border spinner-border-sm text-white"></div>`
    })

</script>
    
@endpush
@endsection