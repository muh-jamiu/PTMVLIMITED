@extends("layouts.app")

@section('title')
Blogs | Prime trast multiverse 
@endsection

@section("content")

<div class="landing contact all">
  <x-main-nav></x-main-nav>

  <div class="main">
    <div class="row mt-5">
        <div class="col-sm-6 mb-5">
           
        </div>
        
        <div class="col-sm-6">
           
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