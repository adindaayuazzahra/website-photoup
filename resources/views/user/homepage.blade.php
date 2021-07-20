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
  .gambar:hover{
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1);
  }

  /* portofolio */
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
    z-index:2;
    margin-left: -4rem;
    margin-top: 1.4rem;
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
  @media  (max-width: 700px){
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
    .portofolio .judul{
      font-size: 35px;
    }
    .profil p, .kegiatan p, .profil a {
     font-size: 13pt;
     text-align: center; 
    }
    .gambar {
      margin-top: 1rem;
    }
  }
  @media (min-width: 768px) and (max-width: 1024px) {
    .kegiatan .judul, .profil .judul{
      font-size: 25px;
    }
    .profil p, .kegiatan p, .profil a {
     font-size: 12pt;
    }
    .profil .gambar-content, .kegiatan .gambar-content{
    margin-top: -6rem;
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
      <h1 class="display-1 mt-1 mb-0">
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
<section  class="profil" >
  <div  class="container" >
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul" data-aos="fade-right" data-aos-anchor-placement="top">Photography<br>Universitas Pancasila</h1>
      </div>
    </div>
    
    <div class="row gambar-content">
      <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" >
        <img  width="100%" height="100%" src="{{asset('assets/img/profil.png')}}"/>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="mt-5 mb-2" data-aos="fade-left" data-aos-anchor-placement="bottom">UKM PHOTO UP KMUP didirikan pada tanggal 22 April 1994 oleh mahasiswa/i Universitas Pancasila dibawah naungan Senat KMUP.</p>
        <a href="" class="btn btn-lg  text-white">Selengkapnya</a>
      </div>
    </div>

  </div>
</section>

{{-- kkegiatn --}}
<section class="kegiatan">
  <div class="container">
    
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul" data-aos="fade-left" data-aos-anchor-placement="top">Kegiatan</h1>
      </div>
    </div>
    
    <div class="row gambar-content mb-5">
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="my-5" data-aos="fade-right" data-aos-anchor-placement="bottom">UKM PHOTO UP KMUP mengadakan segenap kegiatan yang berkaitan dengan fotografi dan berorganisasi.</p>
      </div>
      <div class="col-md-6 col-sm-12 d-flex justify-content-start align-items-start" >
        <img  width="100%" height="100%" src="{{asset('assets/img/kegiatan.png')}}"/>
      </div>
    </div>
    
    {{-- kartuu kegiatan --}}
    <div class="row mb-5">

      {{-- diklat --}}
      <div class="col-md-4 d-flex justify-content-center">
        <a class="gambar" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#diklat">
          <img width="100%" height="100%" src="{{asset('assets/img/diklat.png')}}" alt="">
        </a>
        <!-- Modal -->
        <div class="modal fade" id="diklat" tabindex="-1" aria-labelledby="diklatLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul">Pendidikan<br>dan Pelatihan</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <p>Memperkenalkan dasar-dasar fotografi dan untuk mengembangkan kreativitas bagi calon anggota dan anggota pada khususnya dan mahasiswa/i Universitas Pancasila.</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/k1_1.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k1_2.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k1_3.JPG')}}" class="d-block w-100">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      {{-- Pameran foto --}}
      <div class="col-md-4 d-flex justify-content-center">
        <a class="gambar" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pameran">
          <img width="100%" height="100%" src="{{asset('assets/img/pameran.png')}}" alt="">
        </a>
        <!-- Modal -->
        <div class="modal fade" id="pameran" tabindex="-1" aria-labelledby="pameranLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul">Pameran<br>Fotografi</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <p>Sebuah acara yang memperkenalkan atau memajang hasil karya foto yang mempunyai makna untuk dinikmati serta berbagi pengalaman kepada pengunjung.</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/k2_1.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k2_2.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k2_3.JPG')}}" class="d-block w-100">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      {{-- Hunting Foto --}}
      <div class="col-md-4 d-flex justify-content-center">
        <a class="gambar" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hunting">
          <img width="100%" height="100%" src="{{asset('assets/img/hunting.png')}}" alt="">
        </a>
        <!-- Modal -->
        <div class="modal fade" id="hunting" tabindex="-1" aria-labelledby="huntingLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul">Hunting<br>Foto</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <p>Kegiatan jalan-jalan atau liburan ke suatu tempat untuk memotret berbagai objek.</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/k3_1.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k3_2.JPG')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/k3_3.JPG')}}" class="d-block w-100">
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    
  </div>
</section>

<section class="portofolio gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-3 d-flex align-items-start">
        <img src="{{asset('assets/img/Rectangle porto.png')}}" alt="">
        <h1 class="judul">Portofolio</h1>
      </div>
      
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
    </div>
      
    </div>
    <div class="row mt-5">
      <div class="col-md-12 d-flex justify-content-center">
        <a href="{{'/portofolio'}}" class="btn btn-lg text-white">Klik Untuk Lihat Portofolio yang Lainnya</a>
      </div>
    </div>
  </div>
</section>
@endsection