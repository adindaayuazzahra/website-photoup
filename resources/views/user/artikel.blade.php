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
<section class="artikel">
    <div class="row p-5" style="background-color: #dedede">
      <div class="col-md-12 text-center">
        <h1 class="judul">Artikel.</h1>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <form>
              <div class="input-group my-2 p-1">
                <input type="text" class="form-control" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-addon2">
                <button id="button-addon2" type="button" class="btn btn-link text-success"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container"style="font-family:'Roboto Slab'">
      <div class="row">
        <div class="col-md-4">
          <div class="card border-0">
            <img src="{{asset('assets/img/k1_3.JPG')}}" class="card-img-top">
            <div class="card-body px-0 flex-column">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex flex-row-reverse bd-highlight">
                <a href="{{('/artikel/viewartikel')}}" style="text-decoration: none; color: black;">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <img src="{{asset('assets/img/k1_1.JPG')}}" class="card-img-top">
            <div class="card-body px-0 flex-column">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex flex-row-reverse bd-highlight">
                <a href="#" style="text-decoration: none; color: black;">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <img src="{{asset('assets/img/k1_2.JPG')}}" class="card-img-top">
            <div class="card-body px-0 flex-column">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex flex-row-reverse bd-highlight">
                <a href="#" style="text-decoration: none; color: black;">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <img src="{{asset('assets/img/k1_1.JPG')}}" class="card-img-top">
            <div class="card-body px-0 flex-column">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex flex-row-reverse bd-highlight">
                <a href="#" style="text-decoration: none; color: black;">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0">
            <img src="{{asset('assets/img/k1_3.JPG')}}" class="card-img-top">
            <div class="card-body px-0 flex-column">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex flex-row-reverse bd-highlight">
                <a href="#" style="text-decoration: none; color: black;">Baca Selengkapnya <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</section>

<a href="#" class="scroll-top">
        <i class="ini fas fa-chevron-up"></i>
</a>
@endsection
