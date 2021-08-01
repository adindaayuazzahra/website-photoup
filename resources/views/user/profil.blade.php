@extends('layout/main')
@section('title','PHOTO UP | PROFIL')
@section('css')
<style>
  .nav-masthead .profil {
    border-color: #000000;
    border-radius: 100px;
  }
  .nav-masthead .profil:hover {
    border-color: #000000;
    border-radius: 100px;
  }
  .profil .bagian p {
    font-family: 'Roboto Slab';
    font-weight: 500;
    font-size: 20pt;
  }
  .profil .bagian {
    margin-top: 6rem;
  }
  body{
   background-color: #f8f5f2
  }
  .kontak-sekre {
    margin-top: 5rem;
  }
  .kontak-sekre .judul-home{
    font-family: 'Roboto Slab';
    font-weight:800;
    font-size:50px;
    z-index:2;
    margin-left:2rem;
    margin-top: -5rem;
  }
  .kontak-sekre form {
    margin-top: 2rem;
    font-family: 'Quicksand'
  }
  .kontak-sekre p {
    font-family: 'Quicksand';
    font-size: 12pt;
  }
  @media  (max-width: 800px){
    .kontak-sekre .judul-home{
      font-family: 'Roboto Slab';
      font-weight:800;
      font-size:40px;
      z-index:2;
      margin-left:2rem;
      margin-top: -5rem;
    }
  }
</style>
@endsection
@section('content')
<section  class="profil">
  <div  class="container" >
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <h1 class="judul" data-aos="fade-right" data-eos-delay="100">Photography<br>Universitas Pancasila</h1>
      </div>
    </div>

    <div class="row gambar-content">
      <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-end" >
        <img  width="100%" height="100%" src="{{asset('assets/img/profil.png')}}" data-aos="fade-right"/>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
        <p class="mt-5 mb-2" data-aos="fade-left">UKM PHOTO UP KMUP didirikan pada tanggal 22 April 1994 oleh mahasiswa/i Universitas Pancasila dibawah naungan Senat KMUP.</p>
      </div>
    </div>
<!-- video profil -->
<section class="intro-video-area section" data-aos="fade-down">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="inner-content-head">
          <div class="inner-content">
            <div class="section-title">
            <span class="wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">UKM PHOTO UP KMUP</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Watch Our intro video</h2>
            <p class="wow" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
              <div class="intro-video-play">
                <div class="play-thumb wow zoomIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                <a href="https://www.youtube.com/watch?v=cTnJlw108ks&t=247s" data-lightbox ><i class="ini fas fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->

<!-- akhir video profil -->

<!-- bagian dari -->
    <div class="row bagian">
      <div class="col-sm-12 d-flex justify-content-center" data-aos="fade-in">
        <p>Bagian dari</p>
      </div>
    </div>

    <div class="row p-0 m-5 justify-content-center">
      <div class="col-sm-1 col-md-3 d-flex justify-content-center" data-aos="fade-up" data-eos-delay="100">
        <img src="{{asset('assets/img/up.svg')}}" alt="logo UP" >
      </div>
      <div class="col-sm-1 col-md-3 d-flex justify-content-center" data-aos="fade-up" data-eos-delay="100">
        <img src="{{asset('assets/img/senat.svg')}}" alt="logo senat KMUP">
      </div>
      <div class="col-sm-1 col-md-3 d-flex justify-content-center" data-aos="fade-up" data-eos-delay="100">
        <img src="{{asset('assets/img/panorama.svg')}}" alt="logo panorama">
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

    {{-- kartuu kegiatan --}}
    <div class="row mb-5">

      {{-- diklat --}}
      <div class="col-md-4 d-flex justify-content-center">
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#diklat" data-aos="fade-up" data-aos-delay="100">
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
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#pameran" data-aos="fade-up" data-aos-delay="200">
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
        <a class="gambar" data-bs-toggle="modal" data-bs-target="#hunting" data-aos="fade-up" data-aos-delay="300">
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

{{-- ini kumpulan foto --}}
<div class="container">
    <div class="owl-carousel owl-theme" style="margin-top: 100px;" data-aos="fade-left">
    <div class="item"><img src="{{asset('assets/img/f1.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/f2.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/f3.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/f4.JPG')}}" class="d-block w-100" alt="..."></div>
    </div>
</div>
<div class="container">
    <div class="owl-carousel owl-theme" data-aos="fade-right">
    <div class="item"><img src="{{asset('assets/img/f5.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/f6.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/f7.JPG')}}" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="{{asset('assets/img/k3_3.JPG')}}" class="d-block w-100" alt="..."></div>
    </div>
</div>

  {{-- kontak kami & sekretariat --}}
<div class="container">
  <div class="row kontak-sekre" data-aos="fade-up">
    <div class="col-md-6 d-flex flex-column align-items-start mt-5">
      <img src="{{asset('assets/img/Rectangle porto.png')}}" alt="">
      <h1 class="judul-home">Kontak Kami</h1>
      <div class="container">
        <form class="row g-3">
          <div class="col-md-6">
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
              <label for="floatingInputGrid">Email</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-floating">
              <input type="text" class="form-control" id="inputnama" placeholder="Nama">
              <label for="floatingInputGrid">Nama</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="inputsubjek" placeholder="Subjek">
              <label for="floatingInputGrid">Subjek</label>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
              <label for="floatingInputGrid">Pesan</label>
            </div>
          </div>
          <div class="col-md-12  d-flex justify-content-center">
            <button type="submit" class="btn btn-lg btn-custom text-white" style="width:8rem;">Kirim </button>
          </div>
        </form>
      </div>
    </div>



    <div class="col-md-6 d-flex flex-column align-items-start mt-5" data-aos="fade-up">
      <img src="{{asset('assets/img/Rectangle porto.png')}}" alt="">
      <h1 class="judul-home">Sekretariat</h1>
      <div class="container mt-5">
        <p>Sekretariat UKM PHOTO UP KMUP di Gedung Pusat Kegiatan Mahasiswa, Universitas Pancasila.<br>Jl.Srengseng Sawah, Jagakarsa Jakarta Selatan 12640</p>
        <p><i class="fab fa-whatsapp"></i> Humas - 08123012412<br><i class="fas fa-envelope"></i> photoup1994@gmail.com</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454.53937820491495!2d106.83222367399291!3d-6.3383978129032865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc81e2878c1%3A0x273da725ef199289!2sUKM%20PHOTO%20UP%20KMUP!5e0!3m2!1sen!2sid!4v1627016567407!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
      </div>
    </div>
  </div>
</div>

<a href="#" class="scroll-top">
        <i class="ini fas fa-chevron-up"></i>
</a>
@endsection
