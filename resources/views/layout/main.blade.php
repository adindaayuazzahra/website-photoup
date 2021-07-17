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

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,regular,500,600,700" rel="stylesheet" />


    {{-- css --}}
    @yield('css')


    <title>@yield('title')</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav style="font-family: 'Roboto', sans-serif;" class="navbar fixed-top navbar-expand-lg navbar-light" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" style="font-weight: 900; font-size: 20pt;" href="#">PHOTO UP</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div style="font-weight: 400;font-size: 13pt;" class="nav-masthead  navbar-collapse offcanvas-collapse justify-content-end" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active home" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active profil" href="#">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active blog" href="#">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active artikel" href="#">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active event" href="#">Acara</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
  
    @yield('content')

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
      offset: 350,
      duration: 1000,
      easing: 'ease',
    });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>