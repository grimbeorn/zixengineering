@extends('layouts.app')

@section('content')
<div class="container marketing">
  <h2 class="featurette-heading" style="margin-top:50px;">Proyectos. Infraestructura</h2><br>
  <p class="lead">A continuación se presentan algunos de los proyectos de INFRAESTRUCTURA en los que hemos participado:</p><br>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m1"> Torre de control de aeropuerto</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m2"> Tanque de agua Veracruz</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m3"> Tanque de agua Jilotepec</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m4"> Muro de tierra armada </a>
  </div>
  <hr class="featurette-divider">
</div>

<!-- Modal 1 -->
<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselInf1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInf1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInf1" data-slide-to="1"></li>
            <li data-target="#myCarouselInf1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/1/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/1/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/1/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInf1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInf1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselInf2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInf2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInf2" data-slide-to="1"></li>
            <li data-target="#myCarouselInf2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/2/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/2/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/2/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInf2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInf2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselInf3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInf3" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInf3" data-slide-to="1"></li>
            <li data-target="#myCarouselInf3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/3/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/3/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/3/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInf3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInf3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselInf4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInf4" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInf4" data-slide-to="1"></li>
            <li data-target="#myCarouselInf4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/4/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/4/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/03.infraestructura/4/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInf4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInf4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
      </div>
    </div>
  </div>
</div>

@endsection
