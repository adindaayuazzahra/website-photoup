@extends('layout/main')
@section('title','PHOTO UP | ARTIKEL')
@section('css')
<style>
  .nav-masthead .artikel {
    border-color: #000000;
    border-radius: 100px;
  }
  .nav-masthead .artikel:hover {
    border-color: #000000;
    border-radius: 100px;
  }
  .viewartikel .judul{
    margin-top: 7rem;
  }
  .viewartikel .judul h1{
    font-family: 'Roboto Slab';
    font-weight: 900;
  }
  .viewartikel .content p{
    font-family: 'Roboto';
    text-align: justify;
    text-justify: inter-word;
    font-size: 14pt;
  }
  .viewartikel{
    font-family: 'Roboto';
  }
  


  hr {
    border-top: 2px solid #000000;
    border-style: solid
  }

  @media (max-width: 700px) {
    .artikel .judul {
      font-family: 'Roboto Slab'; 
      font-weight:800;
      font-size:40px; 
    }
  }
</style>
@endsection
@section('content')
{{-- <section class="viewartikel">
  <div class="header d-flex justify-content-center align-items-center w-100 vh-100 ">
    <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}">
    <h1>INI JUDUL</h1>
  </div>
</section> --}}

<section class="viewartikel">
  <div class="container">
    <div class="row judul">
      <div class="col-md-12 d-flex justify-content-center">
        <h1>Judul Artikel</h1>
      </div>
    </div>

    <div class="row viewartikel-gambar d-flex justify-content-center">
      <div class="col-md-7">
        <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}"> 
      </div>
    </div>
    
    <div class="row penulis d-flex justify-content-center mt-1">
      <div class="col-md-7  d-flex align-conttent-center justify-content-center">
        <p><em>27/2/2021, Penulis : Adinda Ayu Azzahra</em></p>  
      </div>
    </div>

    <div class="row content d-flex justify-content-center mt-1">
      <div class="col-md-9 d-flex align-items-center">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.</p> 
      </div>
    </div>

    <div class="row d-flex justify-content-center mt-1">
      <div class="col-md-3">
        <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}">
      </div>
      <div class="col-md-3">
        <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}">
      </div>
      <div class="col-md-3">
        <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}">
      </div>
    </div>

    <div class="row content d-flex justify-content-center mt-1">
      <div class="col-md-9 d-flex align-items-center">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam molestiae, autem excepturi ex vel deserunt laudantium cupiditate repellat alias quasi. Provident, iure iste.Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint corrupti dolorem earum neque nihil reprehenderit nostrum, unde at ratione eius, sit natus omnis doloremque modi ullam</p> 
      </div>
    </div>

    <div class="row penulis d-flex justify-content-center mt-5">
      <div class="col-md-12 d-flex flex-column align-items-center">
        <p>Bagikan</p>
        <h1><i class="fab fa-facebook-square"></i> <i class="fab fa-instagram-square"></i> <i class="fab fa-line"></i> <i class="fab fa-twitter-square"></i></h1>  
      </div>
    </div>

    <hr>

    <div class="row penulis d-flex justify-content-center mt-5">
      <div class="col-md-4 d-flex align-conttent-center justify-content-center">
        <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <circle cx="41" cy="41" r="40" fill="white" stroke="#232323" stroke-width="2"/>
          <rect x="14.4432" y="13.9773" width="53.5795" height="53.5795" fill="url(#pattern0)"/>
          <defs>
          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0" transform="translate(-0.000529661) scale(0.00105932)"/>
          </pattern>
          <image id="image0" width="945" height="944" xlink:href="{{asset('assets/img/logo.jpg')}}"/>
        </svg>
        <div class="col px-3">
          <h5>Adinda Ayu Azzahra</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, debitis!</p>
        </div>
         
      </div>
    </div>

    
  </div>
</section>

{{-- <div class="viewartikel">
  <div class="row judul">
    <img width="100%" height="100%" src="{{asset('assets/img/k1_3.JPG')}}">
  </div>
</div> --}}

<a href="#" class="scroll-top">
        <i class="ini fas fa-chevron-up"></i>
</a>
@endsection