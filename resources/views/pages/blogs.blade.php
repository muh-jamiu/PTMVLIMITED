@extends("layouts.app")

@php
    // Generating 30 blogs
    $blogs = array();

    $titles = array(
        "Top 10 Modern Construction Techniques",
        "The Importance of Sustainable Materials in Building Construction",
        "Exploring Innovative Architectural Designs",
        "Tips for Efficient Project Management in Construction",
        "The Future of Smart Buildings: Integrating Technology in Construction",
        "Green Building Practices: Creating Eco-Friendly Structures",
        "Safety First: Essential Guidelines for Construction Sites",
        "Mastering Structural Engineering: Key Principles for Builders",
        "Unlocking the Secrets of Iconic Skyscrapers",
        "Revolutionizing Urban Development: Trends in City Planning",
        "The Art of Renovation: Transforming Old Spaces into New",
        "Understanding Foundation Types: Choosing the Right Base for Your Building",
        "Exploring Sustainable Construction Materials",
        "Innovations in High-Rise Construction",
        "Balancing Aesthetics and Functionality in Architectural Design",
        "Building for the Future: Trends in Residential Construction",
        "The Role of Robotics and Automation in Construction",
        "Preserving Heritage: Restoring Historic Buildings with Modern Techniques",
        "Creating Energy-Efficient Homes: Strategies for Builders",
        "The Science of Concrete: Innovations in Material Technology"
    );

    $descriptions = array(
        "Discover the latest construction techniques reshaping the industry. From sustainable materials to cutting-edge technology, explore how builders are shaping the cities of tomorrow.",
        "Learn about the importance of using eco-friendly materials in construction. Find out how sustainable practices can benefit both the environment and your bottom line.",
        "Dive into the world of architectural innovation. From bold designs to groundbreaking structures, explore the creative visionaries shaping our built environment.",
        "Efficient project management is crucial for successful construction projects. Get valuable insights and tips for streamlining workflows and maximizing productivity.",
        "Explore the exciting intersection of construction and technology. From smart buildings to digital twins, see how the future of construction is being shaped by innovation.",
        "Discover how green building practices are transforming the construction industry. Learn about sustainable materials, energy-efficient design, and more.",
        "Safety should always be a top priority on construction sites. Get essential guidelines and best practices for creating a safe working environment.",
        "Gain a deeper understanding of structural engineering principles. Explore the science behind building stability and durability.",
        "From towering skyscrapers to iconic landmarks, learn about the engineering marvels that define our urban landscapes.",
        "Explore the latest trends in urban development and city planning. From mixed-use developments to smart cities, see how urban spaces are evolving.",
        "Renovations offer a unique opportunity to breathe new life into old spaces. Discover tips and inspiration for your next renovation project.",
        "The foundation is the backbone of any building. Learn about different foundation types and how to choose the right one for your construction project.",
        "Discover sustainable alternatives to traditional construction materials. From recycled steel to bamboo, explore eco-friendly options for your next build.",
        "From advanced construction methods to innovative materials, explore the fascinating world of high-rise construction.",
        "Find the perfect balance between form and function in architectural design. Learn how to create spaces that are both beautiful and practical.",
        "Discover the latest trends in residential construction. From modular homes to net-zero energy houses, explore the future of homebuilding.",
        "Robots and automation are revolutionizing the construction industry. Learn about the latest advancements and their impact on the building process.",
        "Preserving historic buildings requires a delicate balance of tradition and innovation. Explore the techniques used to restore these architectural treasures.",
        "Create homes that are as energy-efficient as they are beautiful. Learn about design strategies and building techniques for sustainable living.",
        "Concrete is one of the most versatile building materials. Discover the latest innovations in concrete technology and how they're shaping the construction industry."
    );

    $imgs = array(
        "/img/img21.jpeg",
        "/img/img22.jpeg",
        "/img/img23.jpeg",
        "/img/img20.jpeg",
        "/img/img5.jpeg",
        "/img/img6.jpeg",
        "/img/img7.jpeg",
        "/img/img8.jpeg",
        "/img/img9.jpeg",
        "/img/img10.jpeg",
        "/img/img11.jpeg",
        "/img/img12.jpeg",
        "/img/img13.jpeg",
        "/img/img14.jpeg",
        "/img/img15.jpeg",
        "/img/img16.jpeg",
        "/img/img17.jpeg",
        "/img/img18.jpeg",
        "/img/img19.jpeg",
        "/img/img20.jpeg",
    );

    for ($i = 0; $i < count($titles); $i++) {
        $blog = array(
            "title" => $titles[$i],
            "description" => $descriptions[$i],
            "img" => $imgs[$i]
        );
        $blogs[] = $blog;
    }

@endphp

@section('title')
Blogs | Prime trast multiventures  
@endsection

@section("content")

<div class="landing blogs all">
  <x-main-nav :blog="true"></x-main-nav>

  <div class="main">
    <div class="row mt-5">
        @foreach ($blogs as $blog)            
            <div class="col-sm-3 mb-5">
                <div class="cont">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-comment-slash"></i>
                    <h6 class="fw-bold">{{$blog["title"]}}</h6>
                    <img src="{{$blog["img"]}}" alt="">
                    <p class="">{{$blog["description"]}}</p>
                    <i class="fa-solid fa-arrow-up-z-a"></i>
                </div>
            </div>        
        @endforeach
    </div>
  </div>

</div>

<x-footer></x-footer>

@push("javascript")
<script>
    document.addEventListener('readystatechange', function() {
        console.log("loaded")
    });
</script>
    
@endpush
@endsection