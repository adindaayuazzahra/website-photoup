@extends('layout/main')
@section('title','PHOTO UP | PORTOFOLIO')
@section('css')
<style>
  .nav-masthead .porto {
    color: rgb(255, 255, 255);
    border-bottom-color: #F2BF3C;
  }
  section.portofolio {
      margin-top: 9rem;
  }
  .portofolio img {
    position: relative;
    z-index: 1;
  }
  .portofolio .judul {
    font-family: 'Roboto Slab';
    font-weight:800;
    font-size:50px;
  }
  .portofolio .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
  }

  /* Create four equal columns that sits next to each other */
  .column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
  }

  .column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  }

  /* Responsive layout - makes a two column-layout instead of four columns */
  @media screen and (max-width: 800px) {
  .column {
      -ms-flex: 50%;
      flex: 50%;
      max-width: 50%;
      }
  }

  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
  .column {
      -ms-flex: 100%;
      flex: 100%;
      max-width: 100%;
      }
  }

  /* lightbox */
  .portofolio .lightbox img {
      width: 100%;
      transition: 0.2s ease-in-out;
      box-shadow: 0 2px 3px rgba(0,0,0,0.3);
  }

  .portofolio .lightbox img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 15px rgba(0,0,0,0.3);
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
    .portofolio .judul {
      font-family: 'Roboto Slab';
      font-weight:800;
      font-size:40px;
    }
  }
</style>
@endsection
@section('content')
<section class="portofolio gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex align-items-start justify-content-center">
        <h1 class="judul">Portofolio.</h1>
      </div>
    </div>

    <div class="row">
      {{-- Kolom 1 --}}
      <div class="col-md-3 column">
        <a class="lightbox" href="assets/img/1.jpeg">
          <img src="{{asset('assets/img/1.jpeg')}}" style="width:100%">
        </a>
        <a class="lightbox" href="assets/img/7.jpeg">
          <img src="{{asset('assets/img/7.jpeg')}}" style="width:100%">
        </a>
      </div>

      {{-- Kolom 2 --}}
      <div class="col-md-3 column ">
        <a class="lightbox" href="assets/img/4.jpeg">
          <img src="{{asset('assets/img/4.jpeg')}}" style="width:100%">
        </a>
        <a class="lightbox" href="assets/img/6.jpg">
          <img src="{{asset('assets/img/6.jpg')}}" style="width:100%">
        </a>
        <a class="lightbox" href="assets/img/2.jpeg">
          <img src="{{asset('assets/img/2.jpeg')}}" style="width:100%">
        </a>
      </div>

      {{-- Kolom 3 --}}
      <div class="col-md-3 column ">
        <a class="lightbox" href="assets/img/8.jpg">
          <img src="{{asset('assets/img/8.jpg')}}" style="width:100%">
        </a>
        <a class="lightbox" href="assets/img/9.jpeg">
          <img src="{{asset('assets/img/9.jpeg')}}" style="width:100%">
        </a>
      </div>

      {{-- Kolom 4 --}}
      <div class="col-md-3 column ">
        <a class="lightbox" href="assets/img/11.jpg">
          <img src="{{asset('assets/img/11.jpg')}}" style="width:100%">
        </a>
        <a class="lightbox" href="assets/img/12.jpg">
          <img src="{{asset('assets/img/12.jpg')}}" style="width:100%">
        </a>
      </div>
    </div>


  </div>
</section>

@endsection
