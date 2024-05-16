@extends("layouts.app")

@section('title')
About Us | Prime trast multiverse 
@endsection

@section("content")
<div class="landing about all">
  <x-main-nav :about="true"></x-main-nav>

  <div class="main mt-3">
    <div class="text-center">
      <h4 class="fw-bold">About <span class="span">Prime trast multiverse </span></h4>
      <p class="">Build Your Better Home With Professional Trusted Services.</p>
    </div>
    <br>

    <div class="row mb-5 ceo_about">
        <div class="col-sm-5">
          <div class="img"><img src="/img/team1.jpeg" alt=""></div>
        </div>

        <div class="col-sm-7">          
          <h5 class="fw-bold mt-4">Oyinlade Adu CEO of Prime trast multiverse</h5>
          <p class="fw-bold">Engineering Excellence, Constructing Tomorrow: Prime trast multiverse Builders</p>
          <p>Oyinlade Adu was born 3rd of August 1979 to the Adu’s family of Obbo Aiyegunle in Ekiti Local government Area of Kwara State. </p>
          <p>He Graduated  from Federal University of Technology and  earned a B.Tech in Physics Computer Science. </p>
          <p>He worked briefly as pioneer deployer of the Contributory Pension scheme with two different PFAs.</p>
          <p>His passion for contruction and creativity drove him into the Construction and facility management industry. </p>
          <p>Oyinlade is also the CEO of Prime trast Management and investment LTD and a board member in Skylar Inc. </p>
          <p>His philanthropic efforts  through The Future is Now youth Initiative, birth out of concern for youth participation in Leadership. </p>
          <p>He is married to a Beautiful Entrepreneur with two boys.</p>
          <br>
          <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-5">
          <span class="span">How it started</span>
          <h5 class="fw-bold mt-4">Prime trast multiverse</h5>
          <p class="fw-bold">Engineering Excellence, Constructing Tomorrow: Prime trast multiverse Builders</p>
          <hr>
          <p>Our construction company is a business entity that specializes in the planning, development, and execution of construction projects. These projects can range from residential, commercial buildings to infrastructure such as roads, bridges, and utilities.</p>
          <hr>
          <ol>
            <li>Reconstruction services with a broad range of activities aimed at restoring, renovating, or rebuilding structures and properties that have been damaged, degraded, or are in need of improvement.</li>
            <hr>
            <li>We design process that typically begins with conceptualization, where our architects collaborate with clients to understand their requirements, preferences, and project goals</li>
            <hr>
            <li>Our Company General contractors (GCs) oversee all aspects of a construction project, from inception to completion.</li>
            <hr>
            <li>Our Company Clearly outline the goals, objectives, and deliverables of the project. We Identify what needs to be achieved and what is excluded from the project scope to avoid scope creep.</li>
          </ol>
           
        </div>
        
        <div class="col-sm-6">
           <div class="">
            <div class="gallery">
              <div class="gallery-item">
                  <img src="/img/img22.jpeg" alt="Image 1">
              </div>
              <div class="gallery-item">
                  <img src="/img/img7.jpeg" alt="Image 1">
              </div>
              <div class="gallery-item">
                  <img src="/img/img8.jpeg" alt="Image 1">
              </div>
            </div>

            <div class="gallery third mt-1">
              <div class="gallery-item">
                  <img src="/img/img11.jpeg" alt="Image 1">
              </div>
              <div class="gallery-item">
                  <img src="/img/img12.jpeg" alt="Image 1">
              </div>
            </div><hr>

            <div class="links">              
              <li><a href="tel:+2348091810342"><i class="fa-solid mx-2 fa-phone"></i> +2348091810342</a></li>
              <li><a href=""><i class="fa-solid mx-2 fa-envelope"></i> company@ptmvlimited.com</a></li>
              <li><a href=""><i class="fa-solid fa-location-dot mx-2"></i> 19 Chelsea Chibuzor street Katampe Abuja</a></li>
            </div>

            <div class="d-flex social mt-3">
              <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
              <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
            </div>

           </div>
        </div>
    </div>
  </div>

</div>

<x-footer></x-footer>
@endsection