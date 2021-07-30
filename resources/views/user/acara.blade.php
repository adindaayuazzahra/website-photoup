@extends('layout/main')
@section('title','PHOTO UP | ACARA')
@section('css')
<style>
  .nav-masthead .acara {
    color: rgb(255, 255, 255);
    border-bottom-color: #F2BF3C;
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
@endsection
