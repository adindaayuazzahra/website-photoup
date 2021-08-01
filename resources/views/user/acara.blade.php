@extends('layout/main')
@section('title','PHOTO UP | ACARA')
@section('css')
<style>
  .nav-masthead .acara {
    border-color: #000000;
    border-radius: 100px;
  }
  .nav-masthead .acara:hover {
    border-color: #000000;
    border-radius: 100px;
  }
</style>
@endsection
@section('content')
<section class="acara">
  <div class="row">
    <div class="col d-flex align-items-start justify-content-center">
      <h1 class="judul">Acara.</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col d-flex align-items-start justify-content-center">
      <img width="60%"  src="{{asset('assets/img/coming soon.png')}}">
    </div>
  </div>
</section>

<a href="#" class="scroll-top">
        <i class="ini fas fa-chevron-up"></i>
</a>
@endsection
