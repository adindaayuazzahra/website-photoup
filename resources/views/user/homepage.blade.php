@extends('layout/main')
@section('title','PHOTO UP | BERANDA')
@section('css')
<style>
  .nav-masthead .home {
    border-color: #000000;
    border-radius: 100px;
  }
  .nav-masthead .home:hover {
    border-color: #000000;
    border-radius: 100px;
  }
</style>
@endsection
@section('content')
<div class="jumbotron d-flex justify-content-center align-items-center w-100 vh-100 ">
  <div class="container">
    <section class="jumbo-welcome" data-aos="zoom-in">
      <img src="{{asset('assets/img/logo1.png')}}" width="100px" alt="logo photo up">
      <h1 class="display-1"> Selamat Datang di<br>UKM PHOTO UP KMUP </h1><br>
      <p class="alamat" data-aos="zoom-in" data-aos-delay="200">
        Gedung Pusat Kegiatan Mahasiswa, Universitas Pancasila.
        <br>Jl. Srengseng Sawah , Jagakarsa, Jakarta Selatan 126640.</p>

      <a href="#profil" class="btn btn-custom btn-lg text-white mulai" data-aos="zoom-in" data-aos-delay="400">Mulai</a>
    </section>
  </div>
</div>

{{-- Profil --}}
<section id="profil"></section>
<section  class="profil" >
  <div  class="container" >
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul" data-aos="fade-right" data-aos-delay="100" data-aos-anchor-placement="top">Photography<br>Universitas Pancasila</h1>
      </div>
    </div>

    <div class="row gambar-content">
      <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" data-aos="fade-right" >
        <img  width="100%" height="100%" src="{{asset('assets/img/profil.png')}}"/>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="mt-5 mb-2" data-aos="fade-left" data-aos-anchor-placement="bottom">UKM PHOTO UP KMUP didirikan pada tanggal 22 April 1994 oleh mahasiswa/i Universitas Pancasila dibawah naungan Senat KMUP.</p>

        <a href="{{'/profil'}}" class="btn btn-custom btn-lg text-white" data-aos="fade-up" data-aos-delay="200">Selengkapnya</a>
      </div>
    </div>

  </div>
</section>

{{-- kegiatan --}}
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
      <div class="col-md-6 col-sm-12 d-flex justify-content-start align-items-start" data-aos="fade-left" >
        <img  width="100%" height="100%" src="{{asset('assets/img/kegiatan.png')}}"/>
      </div>
    </div>

</div>

<!-- kumpulan Modal -->
      {{-- diklat --}}
        <!-- Modal -->
        <div class="modal fade" id="diklat" tabindex="-1" aria-labelledby="diklatLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center">Pendidikan dan Pelatihan</h5>
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

{{-- pajang karya --}}
        <!-- Modal -->
        <div class="modal fade" id="pajang" tabindex="-1" aria-labelledby="pajangLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center">Pajang Karya</h5>
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

      {{-- Pameran foto --}}
        <!-- Modal -->
        <div class="modal fade" id="pameran" tabindex="-1" aria-labelledby="pameranLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl modal-kg">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center">Pameran Fotografi</h5>
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

{{-- kelas fotografi --}}
        <!-- Modal -->
        <div class="modal fade" id="kelas" tabindex="-1" aria-labelledby="kelasLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center">kelas Fotografi</h5>
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


      {{-- Hunting Foto --}}
        <!-- Modal -->
        <div class="modal fade" id="hunting" tabindex="-1" aria-labelledby="huntingLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl ">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center" >Hunting Foto</h5>
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

{{-- vacation --}}
        <!-- Modal -->
        <div class="modal fade" id="vacation" tabindex="-1" aria-labelledby="vacationLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content p-3">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-11">
                    <h5 class="judul text-center">Vacation</h5>
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

  </div>

</section>

<!-- kegiatan -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box yellow">
              <i class="fas fa-chalkboard-teacher icon"></i>
              <h3>Pendidikan dan Pelatihan</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
              <a href="" data-bs-toggle="modal" data-bs-target="#diklat" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box yellow">
              <i class="fas fa-image icon"></i>
              <h3>Pajang Karya</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              <a href="" data-bs-toggle="modal" data-bs-target="#pajang" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box yellow">
              <i class="fas fa-images icon"></i>
              <h3>Pameran Fotografi</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
              <a href="" data-bs-toggle="modal" data-bs-target="#pameran" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box yellow">
              <i class="fas fa-chalkboard icon"></i>
              <h3>Kelas Fotografi</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. </p>
              <a href="" data-bs-toggle="modal" data-bs-target="#kelas" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box yellow">
              <i class="fas fa-camera icon"></i>
              <h3>Hunting Foto</h3>
              <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit.</p>
              <a href="" data-bs-toggle="modal" data-bs-target="#hunting" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box yellow">
              <i class="fas fa-route icon"></i>
              <h3>Vacation</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              <a href="" data-bs-toggle="modal" data-bs-target="#vacation" class="read-more"><i class ="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- portofolio
<section class="portofolio gallery" data-aos="fade-up">
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
      <div class="col-md-12 d-flex justify-content-center" data-aos="fade-in" data-aos-delay="200">
        <a href="{{'/portofolio'}}" class="btn btn-custom btn-lg text-white">Selengkapnya</a>
      </div>
    </div>
  </div>
</section> -->


<a href="#" class="scroll-top">
        <i class="ini fas fa-chevron-up"></i>
</a>
@endsection
