@extends("layouts.app")

@section('title')
Team Members | Prime trast multiverse 
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
                <img src="/img/team1.jpeg" alt="">
            </div>
        </div>
        <div class="context c_2">
            <div class="img">
                <img src="/img/team3.jpeg" alt="">
            </div>
        </div>
        {{-- <div class="context c_3">
            <div class="img ceo">
                <img src="/img/team1.jpeg" alt="">
            </div>
        </div> --}}
        <div class="context c_4">
            <div class="img">
                <img src="/img/team4.jpeg" alt="">
            </div>
        </div>
        <div class="context c_5">
            <div class="img">
                <img src="/img/team2.jpeg" alt="">
            </div>
        </div>
        </div>
    </div>
    

    <div class="row teams px-5 pt-5">
        <h5 class="fw-bold mb-5">Team Members</h5>

        <div class="col-sm-6">
            <div class="content ceo">
                <div class="img"><img src="/img/team1.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold">Name Here</h5>
                    <h6 class="text-white fw-bold">Managing Director</h6>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam soluta nemo doloremque et minima quo numquam placeat omnis magni ratione. At dolore molestias necessitatibus? Recusandae cumque ea rerum ipsam ducimus!</p>
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
                <div class="img"><img src="/img/team4.jpeg" alt=""></div>
                <div class="text">
                    <h5 class="text-white fw-bold ">Ahmed Buhari</h5>
                    <h6 class="text-white fw-bold mb-3">Role</h6>
                    <p class="fw-bold text-white">Qualifications</p>
                    <p>B.Sc. in Geology</p>
                    <p>Master's Degree in International Trade and Marketing in London</p>
                    <p>Training in Geographic Information Systems</p>
                    <p>Senior Business Development Manager </p>
                    <p class="fw-bold mt-3">Awards</p>
                    <p>MTN Nigeria</p>
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