@extends("layouts.app")

@section('title')
Services | Prime trast multiventures  
@endsection

@section("content")
<div class="landing service all">
  <x-main-nav :service="true"></x-main-nav>

  <div class="main">
    <h3 class="fw-bold text-center mt-3">Our Services</h3>
    <p class="text-center mb-5 wago" style="width: 60%; margin: auto auto"><span class="span fw-bold">Prime trast multiventures  </span> company entity specializes in the planning, development, and execution of construction projects. These projects can range from residential, commercial buildings.</p>
    
    <div class="row mt-4">
      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-hammer"></i>
        <h5 class="fw-bold text-truncate">Building Construction</h5>
        <div class="img"><img src="/img/img22.jpeg" alt=""></div>
        <p>Prime trast multiventures  encompasses the entire process of creating structures, from initial planning and design to the actual construction and completion.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-wrench"></i>
        <h5 class="fw-bold text-truncate">Repair & Expand Building</h5>
        <div class="img"><img src="/img/img7.jpeg" alt=""></div>
        <p>Prime trast multiventures  building construction involves creating structures from the ground up, starting with a solid foundation to support the weight. </p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-screwdriver"></i>
        <h5 class="fw-bold text-truncate">Architectural Design</h5>
        <div class="img"><img src="/img/img20.jpeg" alt=""> </div>
        <p>Our Architectural design encompasses the creative and technical process of conceiving, planning, and constructing buildings and other structures.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-toolbox"></i>
        <h5 class="fw-bold text-truncate">General Contracting</h5>
        <div class="img"><img src="/img/img8.jpeg" alt=""></div>
        <p>Our general contracting involves overseeing the entirety of a construction project from start to finish.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-screwdriver-wrench"></i>
        <h5 class="fw-bold text-truncate">Electrical System</h5>
        <div class="img"><img src="/img/img9.jpeg" alt=""></div>
        <p>Prime trast multiventures  system is responsible for distributing electricity safely and efficiently throughout the structure.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-r"></i>
        <h5 class="fw-bold text-truncate">Product Research</h5>
        <div class="img"><img src="/img/img10.jpeg" alt=""></div>
        <p>Prime trast multiventures  goal is to gather relevant data and insights that can help businesses develop and launch successful</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-hammer"></i>
        <h5 class="fw-bold text-truncate">Flooring & Roofing Building</h5>
        <div class="img"><img src="/img/img22.jpeg" alt=""></div>
        <p>
          Prime trast multiventures  provide flooring and roofing which are critical components of building construction, providing essential protection against the elements.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="cont">
          <i class="fa-solid fa-sliders"></i>
        <h5 class="fw-bold text-truncate">ProBuild Innovations</h5>
        <div class="img"><img src="/img/img12.jpeg" alt=""></div>
        <p>We encompass a wide range of activities, including designing new building materials, creating advanced construction techniques or developing sustainable building practices.</p>
        </div>
      </div>

    </div>
  </div>

</div>
<x-footer></x-footer>
@endsection