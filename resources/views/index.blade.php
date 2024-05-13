@extends("layouts.app")

@section('title')
Welcome | Limited
@endsection

@section("content")
    <div class="landing">
        <div class="home_nav">
            <div class="overlay">
                
                <div class="first d-flex justify-content-between">
                    <div class="d-flex">
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                    </div>
                    <div class="links d-flex">
                        <li><a href="tel:+2348091810342"><i class="fa-solid mx-2 fa-phone"></i> +2348091810342</a></li>
                        <li><a href=""><i class="fa-solid mx-2 fa-envelope"></i> ganiujamiu03@gmail.com</a></li>
                        <li><a href=""><i class="fa-solid fa-location-dot mx-2"></i> 19 Chelsea Chibuzor street Katampe Abuja</a></li>
                    </div>
                </div>

                <div class="sec d-flex justify-content-between">
                    <a href="/" class="logo d-flex">
                        <img src="/img/building.jpg" alt="">
                        <h3 class="fw-bold mx-2 text-white">PTMVLIMITED</h3>
                    </a>
                    <div class="links d-flex justify-content-between">
                        <li><a href="">Home</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About Us</a></li>
                    </div>
                </div>

                <div class="third text-center">
                    <h1 class="fw-bold">Build Your Dream <span class="span">Buildings</span> For Future</h1>
                    <p>Our experience ensures that your <span class="span">projects</span> will be done right and with the upmost <span class="span">professionalism</span>.</p>
                    <a href="" class="btn">Our Services</a>
                </div>
            </div>
            <img src="/img/building.jpg" alt="">
        </div>
        <div class="color"></div>


        <div class="main mt-4">
            <div class="section1 text-center">
                <h2 class="text-uppercase fw-bold">We can help with <span class="span">project</span>, big or small</h2>
                <p class="">Our company are responsible for overseeing & and managing all aspects of a construction project. This includes planning, scheduling, budgeting, and coordination of resources.</p>
            </div>

            <div class="row mt-5 section2">
                <div class="col-sm-7">
                    <img src="/img/workers.png" alt="">
                </div>
                <div class="col-sm-5">
                    <h2 class="fw-bold mb-2">Engineering <span class="span">Excellence</span>, Constructing Tomorrow: Konsta Builders</h2>
                    <p class="">Our construction company is a business entity that specializes in the planning, development, and execution of construction projects. These projects can range from residential, commercial buildings to infrastructure such as roads, bridges, and utilities.</p>
                    <ol>
                        <li class="fw-bold">
                            Resconstruction Services
                        </li>
                        <p>Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                        <li class="fw-bold">
                            Architectural Design
                        </li>
                        <p>Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                        <li class="fw-bold">
                            General Contracting
                        </li>
                        <p>Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                    </ol>
                </div>
            </div>
        </div>

        <div class="section3 row text-white">
            <div class="col-sm-5 mb-4">
                <h2 class="fw-bold mb-3">Build Your Better Home With <span class="span">Professional</span> Trusted Services</h2>
                <p class="divider">A construction company is a business entity that specializes in the planning, development, and execution of construction projects.</p>
                <h6 class="fw-bold"><i class="fa-solid fa-check"></i> Porperty Maintenance</h6>
                <h6 class="fw-bold"><i class="fa-solid fa-check"></i> Integrity Contruction</h6>
                <h6 class="fw-bold"><i class="fa-solid fa-check"></i> Always support from our expert member</h6>
                <h6 class="fw-bold"><i class="fa-solid fa-check"></i> High Quality Work & Satisfaction Guarantee</h6>
            </div>
            <div class="col-sm-7">
                <img src="/img/slant.png" alt="">
            </div>
        </div>

        <div class="section4 mt-3">
            <h3 class="fw-bold text-center">Our Working Plan With Best <span class="span">Experience</span></h3>
            <div class="row mt-5">
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-person-dots-from-line"></i></h1>
                    <h5 class="fw-bold">General Contract</h5>
                    <p class="">Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></h1>
                    <h5 class="fw-bold">Product Research</h5>
                    <p class="">Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-book"></i></h1>
                    <h5 class="fw-bold">Project Planning</h5>
                    <p class="">Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-pen"></i></h1>
                    <h5 class="fw-bold">Start Your Design</h5>
                    <p class="">Amount a lender is willing to lend to financing your purchase as fact in your ratio of debt to income, among other things.</p>
                </div>
            </div>
        </div>

    </div>
    <x-footer></x-footer>
@endsection

@push("javascript")

<script>

</script>
    
@endpush