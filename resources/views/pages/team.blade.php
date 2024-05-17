@extends("layouts.app")

@section('title')
Team Members | Prime trast multiventures  
@endsection

@section("content")

<div class="landing team all">
  <x-main-nav :team="true"></x-main-nav>

  <div class="main">
    <br>
    <br><br>
    <div class="contain_team">
        <div class="d-flex">
        <div class="context c_1">
            <div class="img ">
                <img src="/img/team4.jpeg" alt="">
            </div>
        </div>
        <div class="context c_2">
            <div class="img">
                <img src="/img/team1.jpeg" alt="">
            </div>
        </div>
        <div class="context c_4">
            <div class="img">
                <img src="/img/team2.jpeg" alt="">
            </div>
        </div>
        <div class="context c_5">
            <div class="img">
                <img src="/img/team3.jpeg" alt="">
            </div>
        </div>
        </div>
    </div>
    

    <div class="row teams px-5 pt-5">
        <h5 class="fw-bold mb-5">Team Members</h5>

        <div class="col-sm-6">
            <div class="content">
                <div class="img"><img src="/img/team4.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold ">Ahmed Buhari</h5>
                    <h6 class="text-white fw-bold mb-3">Chairman</h6>
                    <p class="fw-bold text-white">Educations</p>
                    <p>B.Tech FUT Minna</p>
                    <p>Masters Degree London UK</p>

                    <p class="fw-bold text-white">Qualifications</p>
                    <p>B.Sc. in Geology</p>

                    <p class="fw-bold mt-3">Awards</p>
                    <p>MTN Nigeria</p>
                    <p class="fw-bold text-white mt-3">More</p>
                    <p>Ahmed Buhari's journey began at age eleven, thrust into the role of a father figure after his father's passing. Despite early responsibilities, he earned a B.Sc. in Geology and embarked on a career in oil and gas in Lagos. </p>
                    <p>His philanthropic efforts  through the Ahmed Bee Foundation support education and empower people with disabilities. Ahmed's achievements have earned him numerous accolades, including awards from MTN Nigeria and recognition from global organizations. He strives to unite Nigerian youth and promote political consciousness. </p>
                    <p>Married with three children, Ahmed's story embodies resilience, growth, and generosity, reflecting his commitment to progress and innovation in Nigeria. For more insights into Ahmed's work, visit his YouTube page, Ahmed Bee Buhari.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="content ceo">
                <div class="img"><img src="/img/team1.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold">Oyinlade Adu</h5>
                    <h6 class="text-white fw-bold">Managing Director</h6>
                    <p class="fw-bold text-white mt-3">Educations</p>
                    <p>Federal University of Technology Minna Niger State</p>
                    <p class="fw-bold text-white mt-3">Qualifications</p>
                    <p>B.Tech in Physics Computer Science</p>
                    <p>Construction and facility management industry</p>
                    <p>Pioneer deployer of the Contributory Pension scheme with two different PFAs</p>
                    <p class="fw-bold text-white mt-3">CEO</p>
                    <p>CEO of Prime trast Management and investment LTD</p>
                    <p>Board member in Skylar Inc</p>
                    <p class="fw-bold text-white mt-3">More</p>
                    <p>Oyinlade Adu was born 3rd of August 1979 to the Adu’s family of Obbo Aiyegunle in Ekiti Local government Area of Kwara State. </p>
                    <p>He Graduated  from Federal University of Technology and  earned a B.Tech in Physics Computer Science. 
                        He worked briefly as pioneer deployer of the Contributory Pension scheme with two different PFAs. </p>
                    <p>His passion for contruction and creativity drove him into the Construction and facility management industry. </p>
                    <p>Oyinlade is also the CEO of Prime trast Management and investment LTD and a board member in Skylar Inc. </p>
                    <p>His philanthropic efforts  through The Future is Now youth Initiative, birth out of concern for youth participation in Leadership. He is married to a Beautiful Entrepreneur with two boys.</p>
                   </div>
            </div>
        </div>   
        
        
        <div class="col-sm-6">
            <div class="content">
                <div class="img"><img src="/img/team2.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold">BALOGUN BUSAYO NIFEMI</h5>
                    <h6 class="text-white fw-bold mb-3">Deputy director</h6>
                    <p class="fw-bold text-white">Educations</p>
                    <p class="text-capitalize">YABA COLLEGE OF TECHNOLOGY (2010- 2016) NATIONAL DIPLOMA (ND) BUSINESS ADMINISTRATION.</p>
                    <p class="text-capitalize">HIGHER NATIONAL DIPLOMA (HND)MARKETING. UNIVERSITY OF LAGOS BSC (BUSINESS ADMINISTRATION) (2013 - 2017)</p>
                 </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="content">
                <div class="img"><img src="/img/team3.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold">Engr. David Adeyinka Adu</h5>
                    <h6 class="text-white fw-bold mb-3">Head, Engineering services</h6>
                    <p class="fw-bold text-white mt-3">Educations</p>
                    <p class="">University of Ilorin, Nigeria, 2006-2011</p>
                    <p>University of Washington, United States of America, 2022</p>
                    <p>University of Lincoln, United Kingdom, 2022</p>
                    <p class="fw-bold text-white mt-3">Qualifications</p>
                    <p>Master of Business Administration (MBA), 2023</p>
                    <p>Certificate in Project Management, 2022</p>
                    <p>Master of Engineering degree in Civil Engineering, 2017</p>
                    <p>Bachelor of Engineering degree, 2011</p>
                    <p class="fw-bold text-white mt-3">Professional Qualifications</p>
                    <p>Registered Member of the Nigeria Society of Engineers (NSE), 2012</p>
                    <p>Registered Engineer with the Council For The Regulation of Engineering Practice in Nigeria (COREN), 2016</p>
                    <p>Registered Member of the Nigeria Institution of Civil Engineers (NICE), 2017</p>
                </div>
            </div>
        </div>

        
        <div class="col-sm-6">
            <div class="content">
                <div class="img"><img src="/img/img21.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold">Tolulope Adebayo</h5>
                    <h6 class="text-white fw-bold mb-3">Head, Business Strategy and Planning</h6>
                    <p class="fw-bold text-white mt-3">Educations</p>
                    <p class="">University of llorin - 2018</p>

                    <p class="fw-bold text-white mt-3">Qualifications</p>
                    <p>B.sc certificate in Surveying and Geoinformatics </p>
                    <p>Worked at the Federal School of surveying Oyo State (Data Acquisition, Data Manipulation, Data Gathering, Processing and Storage)</p>
                    <p>Worked in the telecommunication industry with MTN Nigeria</p>

                    <p class="fw-bold text-white mt-3">More</p>
                    <p>He is proficient at building and leading cross-functional teams with a focus on achieving operational excellence in business analysis, strategic planning, innovation and implementing enterprise-wide intelligence and performance management programs.</p>
                    <p>His love for design and construction led him to join Prime Trast Multiventures Limited in the year 2020 where he has over the years worked in different capacity. He is currently the Head, Business Strategy and Planning, responsible for coordinating, developing and implementing strategies that satisfy the annual and long-term objectives of the Organization</p>
                </div>
            </div>
        </div>
       
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