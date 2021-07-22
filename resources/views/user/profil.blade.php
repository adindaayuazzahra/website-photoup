@extends('layout/main')
@section('title','PHOTO UP | PROFIL')
@section('css')
<style>
  .nav-masthead .profil {
    color: rgb(255, 255, 255);
    border-bottom-color: #F2BF3C;
  }
  .profil .bagian p {
    font-family: 'Roboto Slab';
    font-weight: 500;
    font-size: 26pt;
  }
  .profil .bagian {
    margin-top: 6rem;
  }
  .carousel-inner{
   
  }
</style>
@endsection
@section('content')
<section  class="profil" >
  <div  class="container" >
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul" data-aos="fade-right">Photography<br>Universitas Pancasila</h1>
      </div>
    </div>
    
    <div class="row gambar-content">
      <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" >
        <img  width="100%" height="100%" src="{{asset('assets/img/profil.png')}}"/>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="mt-5 mb-2" data-aos="fade-left">UKM PHOTO UP KMUP didirikan pada tanggal 22 April 1994 oleh mahasiswa/i Universitas Pancasila dibawah naungan Senat KMUP.</p>
        <a href="" class="btn btn-lg  text-white">Selengkapnya</a>
      </div>
    </div>

    <div class="row bagian">
      <div class="col-md-12 d-flex justify-content-center">
        <p>Bagian dari</p>
      </div>
    </div>

    <div class="row p-0 m-0">
      <div class="col-md-4 d-flex justify-content-center">
        <img width="30%" height="100%" src="{{asset('assets/img/up.png')}}" alt="">
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <img width="30%" height="100%" src="{{asset('assets/img/senat.png')}}" alt="">
      </div>
      <div class="col-md-4 d-flex justify-content-center">
        <img width="70%" height="100%" src="{{asset('assets/img/panorama.png')}}" alt="">
      </div>
    </div>
  </div>
</section>

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
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#diklat">
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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#pameran">
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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#hunting">
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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
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

<div class="container">
  <div id="mycarousel" class="carousel carousel-dark slide" style="box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 1);" data-bs-interval="3000" data-bs-touch="true" data-bs-keyboard="true" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/img/f1.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f2.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f3.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f4.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f5.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f6.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f7.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/f8.jpg')}}" class="d-block w-100 h-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
@endsection
