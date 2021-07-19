@extends('layout/main')
@section('title','PHOTO UP | PORTOFOLIO')
@section('css')
<style>
  .nav-masthead .nav-link {
    padding: .25rem 0;
    font-weight: 700;
    color: rgba(255, 255, 255, .5);
    border-bottom: .25rem solid transparent;
  }
  .nav-masthead .nav-link:hover,
  .nav-masthead .nav-link:focus {
    border-bottom-color: rgba(61, 61, 61, 0.25);
  }
  .nav-masthead .nav-link {
    margin-left: 0.5rem;
  }
  .nav-masthead .acara {
    color: rgb(255, 255, 255);
    border-bottom-color: #F2BF3C;
  }
  section.acara {
      margin-top: 9rem;
  }
  .acara .judul {
    font-family: 'Roboto Slab'; 
    font-weight:800;
    font-size:50px; 
  }
  @media (max-width: 991.98px) {
    .offcanvas-collapse {
      position: fixed;
      top: 60px; /* Height of navbar */
      bottom: 0;
      left: 100%;
      width: 100%;
      padding-right: 1rem;
      padding-left: 1rem;
      padding-top: 1rem;
      overflow-y: auto;
      visibility: hidden;
      background-color: #ffffff;
      transition: transform .3s ease-in-out, visibility .3s ease-in-out;
    }
    .offcanvas-collapse.open {
      background-color: #ffffff;
      visibility: visible;
      padding-left: 1rem;
      padding-right: 5rem;
      transform: translateX(-100%);
    }
  }
  @media (max-width: 700px) {
    .acara .judul {
      font-family: 'Roboto Slab'; 
      font-weight:800;
      font-size:40px; 
    }
  }
</style>
@endsection
@section('content')
<section class="acara">
  <div class="row">
    <div class="col-md-12 d-flex align-items-start justify-content-center">
      <h1 class="judul">Acara.</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12 d-flex align-items-start justify-content-center">
      <img width="100%" height="100%" src="{{asset('assets/img/coming soon.png')}}">
    </div>
  </div>
</section>
@endsection