@extends('layout/main')
@section('title','PHOTO UP | HOMEPAGE')
@section('css')
<style>
  .nav-masthead .home {
  color: rgb(255, 255, 255);
  border-bottom-color: #F2BF3C;
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam, laudantium voluptates autem nisi dolore aliquid aliquam excepturi velit tempore ipsum ullam laborum facere asperiores, iste ex eius dolorem suscipit.</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/diklat.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/pameran.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/hunting.png')}}" class="d-block w-100">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam, laudantium voluptates autem nisi dolore aliquid aliquam excepturi velit tempore ipsum ullam laborum facere asperiores, iste ex eius dolorem suscipit. pameran  fotografi</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/diklat.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/pameran.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/hunting.png')}}" class="d-block w-100">
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed quibusdam, laudantium voluptates autem nisi dolore aliquid aliquam excepturi velit tempore ipsum ullam laborum facere asperiores, iste ex eius dolorem suscipit. hunting foto</p>
                  </div>
                  <div class="col-md-7">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{asset('assets/img/diklat.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/pameran.png')}}" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                          <img src="{{asset('assets/img/hunting.png')}}" class="d-block w-100">
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
        <h1 class="judul-home">Portofolio</h1>
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