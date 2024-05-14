@extends("layouts.app")

@section('title')
Welcome | Prime trast multiverse
@endsection

@section("content")
    <div class="landing">
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
                      <p class="active"><a href=""><i class="fa-solid fa-house"></i> Home</a></p>
                      <p><a href=""><i class="fa-brands fa-usps"></i> Services</a></p>
                      <p><a href=""><i class="fa-solid fa-envelope"></i> Contact Us</a></p>
                      <p><a href=""><i class="fa-solid fa-envelope"></i> About Us</a></p>
                      <p><a href=""><i class="fa-solid fa-blog"></i> Blog</a></p>
                      <p><a href=""><i class="fa-solid fa-diagram-project"></i> Projects</a></p>
                      <p><a href=""><i class="fa-solid fa-people-group"></i> Team</a></p>
                      
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
                        <li><a href="">Home</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Blogs</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About Us</a></li>
                    </div>
                </div>

                <div class="third text-center">
                    <h1 class="fw-bold">Build Your Dream <span class="span">Buildings</span> For Future</h1>
                    <p><span class="span fw-bold text-uppercase">Prime trast multiverse</span> experience ensures that your projects will be done right and with the upmost <span class="span">professionalism</span>.</p>
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
                    <h2 class="fw-bold mb-2">Engineering <span class="span">Excellence</span>, Constructing Tomorrow: <span class="span">Prime trast multiverse</span> Builders</h2>
                    <p class="">Our construction company is a business entity that specializes in the planning, development, and execution of construction projects. These projects can range from residential, commercial buildings to infrastructure such as roads, bridges, and utilities.</p>
                    <ol>
                        <li class="fw-bold">
                            Resconstruction Services
                        </li>
                        <p>Reconstruction services with a broad range of activities aimed at restoring, renovating, or rebuilding structures and properties that have been damaged, degraded, or are in need of improvement.</p>
                        <li class="fw-bold">
                            Architectural Design
                        </li>
                        <p>We design process that typically begins with conceptualization, where our architects collaborate with clients to understand their requirements, preferences, and project goals</p>
                        <li class="fw-bold">
                            General Contracting
                        </li>
                        <p>Our Company General contractors (GCs) oversee all aspects of a construction project, from inception to completion.</p>
                    </ol>
                </div>
            </div>
        </div>

        <div class="section3 text-white">
          <div class="row">
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
        </div>

        <div class="section4 mt-3">
            <h3 class="fw-bold text-center">Our Working Plan With Best <span class="span">Experience</span></h3>
            <div class="row mt-5">
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-person-dots-from-line"></i></h1>
                    <h5 class="fw-bold">General Contract</h5>
                    <p class="">General contractors (GCs) oversee all aspects of a construction project, from inception to completion. They are responsible for project planning, scheduling, budgeting, and coordination of resources.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-magnifying-glass-arrow-right"></i></h1>
                    <h5 class="fw-bold">Product Research</h5>
                    <p class="">The step in product research is to identify potential opportunities in the market or specific needs that the product aims to address. This may involve market analysis, consumer surveys, competitor analysis, and trend research to understand customer preferences.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-book"></i></h1>
                    <h5 class="fw-bold">Project Planning</h5>
                    <p class="">Our Company Clearly outline the goals, objectives, and deliverables of the project. We Identify what needs to be achieved and what is excluded from the project scope to avoid scope creep.</p>
                </div>
                <div class="col-sm-3 mb-3 text-center">
                    <h1 class="icon"><i class="fa-solid fa-pen"></i></h1>
                    <h5 class="fw-bold">Start Your Design</h5>
                    <p class="">We Begin by thoroughly understanding the requirements, goals, constraints, and preferences outlined in the design brief. This may involve meeting with our clients or stakeholders to gather insights, clarify expectations, and define project objectives.</p>
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