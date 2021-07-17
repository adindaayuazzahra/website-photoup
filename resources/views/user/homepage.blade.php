@extends('layout/main')
@section('title','PHOTO UP | HOMEPAGE')
@section('css')
<style>
  .btn.mulai{
    background-color: #078080;
    width: 120px;
    border-radius: 20px;
    font-weight: 700;
    margin-top: 20px;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1);
  }
  .btn.mulai:hover {
    box-shadow: 0 1.5rem 2rem 0 rgba(0, 0, 0, 8.5);
  }
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
  .nav-masthead .home {
    color: rgb(255, 255, 255);
    border-bottom-color: #F2BF3C;
  }
  
  .jumbotron {
    background-color: #f8f5f2;
    text-align: center;
    font-family: 'Quicksand';
    
  }
  .jumbotron .display-4 span {
    font-weight: 700;
    text-align: center;
  }

  /* Profil */
  .btn{
    background-color: #078080;
    border-radius: 20px;
    text-align: center;
    font-weight: 500;
  }
  .btn:hover {
    box-shadow: 0 1.5rem 2rem 0 rgba(0, 0, 0, 8.5);
  }
  .profil .judul {
    font-family: 'Roboto Slab'; 
    font-weight:800;
    font-size:50px; 
    z-index:2;
  }
  .profil img {
    position: relative;
    z-index: 1;
  }
  .profil p {
    font-family: 'Roboto';
    font-size:18pt;
  }
  section.profil {
    margin-top: 10rem;
  }

  /* kegiatan */
  .kegiatan .judul {
    font-family: 'Roboto Slab'; 
    font-weight:900;
    font-size:50px; 
    z-index:2;
  }
  .kegiatan img {
    position: relative;
    z-index: 1;
  }
  .kegiatan .gambar-content, .profil .gambar-content {
    margin-top: -10rem;
  }
  .kegiatan p {
    font-family: 'Roboto';
    font-size:18pt;
    text-align: right;
  }
  section.kegiatan {
      margin-top: 15rem;
  }
  .card {
    background-color: #F2BF3C;
    height: 14rem;
    border-radius: 10px; 
  }
  .card:hover{
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1);
  }
  h5{
    background-color: #078080;
    border-radius: 20px;
    font-weight: 500;
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
  @media  (max-width: 700px){
    .jumbotron {
      height: 600px;
    }
    .jumbotron .alamat {
      font-size: 9pt;
    }
    .jumbotron .display-4 {
      font-size: 20pt;
    }
    .profil .gambar-content, .kegiatan .gambar-content{
    margin-top: 0rem;
    }

    section.profil {
      margin-top: 5rem;
    }
    section.kegiatan {
      margin-top: 5.5rem;
    }
    .kegiatan .judul, .profil .judul{
      font-size: 30px;
      text-align: center;
    }
    .profil p, .kegiatan p, .profil a {
     font-size: 13pt;
     text-align: center; 
    }

    .card {
      margin-top: 1rem;
    }

  }
</style>
@endsection


@section('content')
<div class="jumbotron d-flex justify-content-center align-items-center w-100 vh-100 ">
  <div class="container flex-column">
    <section class="">
      <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <circle cx="41" cy="41" r="40" fill="white" stroke="#232323" stroke-width="2"/>
        <rect x="14.4432" y="13.9773" width="53.5795" height="53.5795" fill="url(#pattern0)"/>
        <defs>
        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
          <use xlink:href="#image0" transform="translate(-0.000529661) scale(0.00105932)"/>
        </pattern>
        <image id="image0" width="945" height="944" xlink:href="{{asset('assets/img/logo.jpg')}}"/>
      </svg>
      <h1 class="display-4 mt-1 mb-0">
        {{-- <svg width="90" height="90" style="margin-left:-100px;">
          <rect width="90" height="90" style="fill:#F2BF3C;" />
        </svg> --}}
        Selamat Datang di<br><span>UKM PHOTO UP KMUP</span>
      </h1><br>
      <p class="alamat">
        Gedung Pusat Kegiatan Mahasiswa, Universitas Pancasila.
        <br>Jl. Srengseng Sawah , Jagakarsa, Jakarta Selatan 126640.
        {{-- <svg style="margin-right: -6rem;" width="90" height="90" style="margin-left:-100px;">
          <rect width="90" height="90" style="fill:#F2BF3C;" />
        </svg> --}}
      </p>
      
      <a href="#profil" class="btn btn-lg text-white mulai p-1">MULAI</a>
    </section>
  </div>
</div>

{{-- Profil --}}
<section id="profil"></section>
<section  class="profil" data-aos="fade-right">
  <div  class="container" >
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul ">Photography<br>Universitas Pancasila</h1>
      </div>
    </div>
    
    <div class="row gambar-content">
      <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" >
        <img  width="100%" height="100%" src="{{asset('assets/img/profil.png')}}"/>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="mt-5 mb-2">UKM PHOTO UP KMUP didirikan pada tanggal 22 April 1994 oleh mahasiswa/i Universitas Pancasila dibawah naungan Senat KMUP.</p>
        <a href="" class="btn btn-lg  text-white">Selengkapnya</a>
      </div>
    </div>

  </div>
</section>

{{-- kkegiatn --}}
<section class="kegiatan">
  <div class="container"data-aos="fade-left">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul">Kegiatan</h1>
      </div>
    </div>
    
    <div class="row gambar-content mb-5">
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="my-5">UKM PHOTO UP KMUP mengadakan segenap kegiatan yang berkaitan dengan fotografi dan berorganisasi.</p>
      </div>
      <div class="col-md-6 col-sm-12 d-flex justify-content-start align-items-start" >
        <img  width="100%" height="100%" src="{{asset('assets/img/kegiatan.png')}}"/>
      </div>
    </div>
    
    <div class="row mb-5">
      <div class="col-md-4"data-aos-anchor-placement="bottom" data-aos-delay="">
        <a href="">
          <div class="card">
            <div class="card-body d-flex align-items-end">
              <h5><span class="badge">Pendidikan  & Pelatihan</span></h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4"data-aos-anchor-placement="bottom" data-aos-delay="">
        <a href="">
          <div class="card">
            <div class="card-body d-flex align-items-end">
              <h5><span class="badge">Pameran Foto</span></h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4"data-aos-anchor-placement="bottom" data-aos-delay="">
        <a href="">
          <div class="card">
            <div class="card-body d-flex align-items-end">
              <h5><span class="badge">Hunting Foto</span></h5>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection