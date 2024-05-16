@php
    $service = $service ?? false;
    $blog = $blog ?? false;
    $contact = $contact ?? false;
    $about = $about ?? false;
    $works = $works ?? false;
    $team = $team ?? false;
@endphp

<div class="home_nav">
    <div class="overlay">
        <p class="hamburg text-white d-none" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"><i class="fa-solid fa-bars"></i></p>

        <div class="mobile d-none">
            <a href="/" class="logo d-flex">
                <img src="/img/logo2.jpeg" alt="">
                <h3 class="fw-bold mx-2 text-white">PTMVLIMITED</h3>
            </a>
        </div>

        
        <div class="offcanvas offcanvas-start" id="sidebar">
            <div class="offcanvas-header mb-4">
              <h1 class="offcanvas-title text-success fw-bold">PTMVLIMITED</h1>
              <button type="button" class="btn-close text-reset text-success" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <p><a href="/"><i class="fa-solid fa-house"></i> Home</a></p>
              <p><a class="{{$service ? "active" : ""}}" href="/services"><i class="fa-brands fa-usps"></i> Services</a></p>
              <p><a class="{{$contact ? "active" : ""}}" href="/contact-us"><i class="fa-solid fa-envelope"></i> Contact Us</a></p>
              <p><a class="{{$about ? "active" : ""}}" href="/about-us"><i class="fa-solid fa-address-card"></i> About Us</a></p>
              <p><a  class="{{$blog ? "active" : ""}}" href="/blogs"><i class="fa-solid fa-blog"></i> Blog</a></p>
              <p><a class="{{$works ? "active" : ""}}" href="/feature-works"><i class="fa-solid fa-diagram-project"></i> Projects</a></p>
              <p><a class="{{$team ? "active" : ""}}" href="/team"><i class="fa-solid fa-people-group"></i> Team</a></p>
              
              <div class="cont mt-5 pt-3">                            
                <p><a href="tel:+2348091810342"><i class="fa-solid text-white mx-2 fa-phone"></i> +2348091810342</a></p>
                <p><a href=""><i class="fa-solid text-white mx-2 fa-envelope"></i> company@ptmvlimited.com</a></p>
                <p><a href=""><i class="fa-solid text-white fa-location-dot mx-2"></i> 19 Chelsea Chibuzor street Katampe Abuja</a></p>

                <div class="d-flex mt-5">
                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                  </div>
              </div>

             
            </div>
        </div>
       <div class="first d-flex justify-content-between">
            <div class="d-flex">
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
            </div>
            <div class="links d-flex">
                <li><a href="tel:+2348091810342"><i class="fa-solid mx-2 fa-phone"></i> +2348091810342</a></li>
                <li><a href=""><i class="fa-solid mx-2 fa-envelope"></i> company@ptmvlimited.com</a></li>
                <li><a href=""><i class="fa-solid fa-location-dot mx-2"></i> 19 Chelsea Chibuzor street Katampe Abuja</a></li>
            </div>
        </div>

        <div class="sec d-flex justify-content-between">
            <a href="/" class="logo d-flex">
                <img src="/img/logo2.jpeg" alt="">
                <h3 class="fw-bold mx-2 text-white">PTMVLIMITED</h3>
            </a>
            <div class="links d-flex justify-content-between">
                <li class=""><a href="/">Home</a></li>
                <li><a class="{{$service ? "active" : ""}}" href="/services">Services</a></li>
                <li><a class="{{$works ? "active" : ""}}" href="/feature-works">Projects</a></li>
                <li><a class="{{$blog ? "active" : ""}}" href="/blogs">Blogs</a></li>
                <li><a class="{{$contact ? "active" : ""}}" href="/contact-us">Contact Us</a></li>
                <li><a class="{{$about ? "active" : ""}}" href="/about-us">About Us</a></li>
                <li><a class="{{$team ? "active" : ""}}" href="/team">Team</a></li>
            </div>
        </div>
    </div>
    <img src="/img/building.jpg" alt="">
</div>