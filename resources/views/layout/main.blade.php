<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/logo.jpg')}}">
    <link rel="stylesheet" href="{{asset('assets/node_modules/aos/dist/aos.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,regular,500,600,700" rel="stylesheet" />

    {{-- css --}}
    @yield('css')

    <title>@yield('title')</title>
  </head>
  <body style="overflow-x:hidden;" class="w-100">
    {{-- Navbar --}}
    <nav style="font-family: 'Roboto', sans-serif;" class="navbar fixed-top navbar-expand-lg navbar-light"  aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" style="font-weight: 900; font-size: 20pt;" href="#">PHOTO UP</a>
        <button class="navbar-toggler border-0" type="button" aria-expanded="false" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="font-weight: 400;font-size: 13pt;" class="nav-masthead  navbar-collapse  offcanvas-collapse  justify-content-end" id="navbars">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active home" href="{{'/'}}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active profil" href="{{'/profil'}}">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active porto" href="{{'/portofolio'}}">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active artikel" href="{{'/artikel'}}">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active acara" href="{{'/acara'}}">Acara</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>  

    @yield('content')

    <footer class="text-center text-lg-start p-1 mt-5 foooter"style="background-color : #f8f5f2;">
      <section class="content-footer">
        <div class="container text-center text-md-start mt-5">
          <div class="row">
            <div class="col-md-6 col-sm-12 mx-auto mb-4" style="font-family:'Roboto';">
              <p class="text-uppercase fw-bold mb-2" style="font-weight:400; font-size:20pt;">UKM PHOTOUP KMUP</p>
              <p style="font-weight:300;">Gedung Pusat Kegiatan Mahasiswa, Universitas Pancasila.<br>Jl.Srengseng Sawah, Jagakarsa Jakarta Selatan 12640</p>
            </div>
            <div class="col-md-5 col-sm-12 mx-auto d-md-flex justify-content-end align-content-center align-items-center mb-md-0 mb-4">
              <a href="https://www.youtube.com/channel/UCiOalYiee_t57inMNtgSVtA" target="_blank" style="margin-right:1rem;" ><i class="fab fa-youtube"style="font-size: 50px; color:black;"></i></a>
              <a href="https://www.instagram.com/photoup94/" target="_blank"><i class="fab fa-instagram"style="font-size: 50px; color:black;"></i></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">© 2021 Copyright: PHOTOUP</p>
            </div>
          </div>
        </div>
      </section>
    </footer>  
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      (function () {
        'use strict'

        document.querySelector('#navbarSideCollapse').addEventListener('click', function () {
          document.querySelector('.offcanvas-collapse').classList.toggle('open')
        })
      })()

      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
          nav.classList.add('bg-light', 'shadow');
        } else {
          nav.classList.remove('bg-light', 'shadow');
        }
      })
    </script>
    <script src="{{asset('assets/node_modules/aos/dist/aos.js')}}"></script>
    <script>
      AOS.init({
      offset: 0,
      duration: 1000,
      easing: 'ease',
      disable: window.innerWidth < 1024,
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
      baguetteBox.run('.gallery');
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>