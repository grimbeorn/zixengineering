@extends('layouts.app')

@section('content')
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner" style="width: 100%; height:350px;">
        <div class="carousel-item active">
          <img class="first-slide" src="{{ asset('imgs/00. carrusel/01.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="{{ asset('imgs/00. carrusel/02.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('imgs/00. carrusel/03.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('imgs/00. carrusel/04.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="{{ asset('imgs/00. carrusel/05.jpg') }}" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container marketing">
      <div class="row featurette">
          <div class="col-md-12">
            <h1 >Zix Ingeniería</h1>
            <br>
            <p class="lead"><strong>Zix Ingeniería</strong> es una empresa de consultoría especializada en proyectos de estructuras.  Nos dedicamos al cálculo, diseño, planos y redacción de informes en las áreas de edificación, industrial, comercial, infraestructura, mecánica y R+D.</p><p class="lead"><strong>Zix Ingeniería</strong> ofrece soluciones en diseño de estructuras de concreto (hormigón), acero, madera, composites y mecánicas en cualquier fase del proyecto.</p>
          </div>
        </div>
        <hr class="featurette-divider">
    </div>
  </main>
@endsection
