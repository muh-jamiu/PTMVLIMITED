@extends("layouts.app")

@section('title')
Blogs | Prime trast multiverse 
@endsection

@section("content")

<div class="landing blogs all">
  <x-main-nav :blog="true"></x-main-nav>

  <div class="main">
    <div class="row mt-5">
        @for ($i = 0; $i < 15; $i++)
            <div class="col-sm-3 mb-5">
                <div class="cont">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-comment-slash"></i>
                    <h6 class="fw-bold">How to build up your building with top rated construction company</h6>
                    <img src="https://4damstheme.com/html/konsta/assets/img/images/th-2/blog-thumbnail-2.jpg" alt="">
                    <p class="">Our mission is to deliver creative and innovative that solutions that help businesses succeed.</p>
                    <i class="fa-solid fa-arrow-up-z-a"></i>
                </div>
            </div>            
        @endfor
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