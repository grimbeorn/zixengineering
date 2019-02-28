@extends('layouts.app')

@section('content')
<div class="container marketing">
  <h2 class="featurette-heading" style="margin-top:50px;">Proyectos. Otros</h2><br>
  <p class="lead">A continuación se presentan algunos de los OTROS proyectos en los que hemos participado:</p><br>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m1"> Coco Hotel</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m2"> Edificio de aulas de colegio</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m3"> Edificio administrativo de colegio</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m4"> Escenario y graderío para FIL</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m5"> Edificio Ciudad de México</a>
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
        <div id="myCarouselOtr1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselOtr1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselOtr1" data-slide-to="1"></li>
            <li data-target="#myCarouselOtr1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/04.otros/1/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/04.otros/1/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/04.otros/1/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselOtr1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselOtr1" role="button" data-slide="next">
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
        <div id="myCarouselOtr2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselOtr2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselOtr2" data-slide-to="1"></li>
            <li data-target="#myCarouselOtr2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/04.otros/2/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/04.otros/2/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/04.otros/2/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselOtr2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselOtr2" role="button" data-slide="next">
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
        <div id="myCarouselOtr3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselOtr3" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselOtr3" data-slide-to="1"></li>
            <li data-target="#myCarouselOtr3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/04.otros/3/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/04.otros/3/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/04.otros/3/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselOtr3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselOtr3" role="button" data-slide="next">
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
        <div id="myCarouselOtr4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselOtr4" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselOtr4" data-slide-to="1"></li>
            <li data-target="#myCarouselOtr4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/04.otros/4/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/04.otros/4/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/04.otros/4/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselOtr4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselOtr4" role="button" data-slide="next">
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

<!-- Modal 5 -->
<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselOtr5" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselOtr5" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselOtr5" data-slide-to="1"></li>
            <li data-target="#myCarouselOtr5" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/04.otros/5/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/04.otros/5/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/04.otros/5/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselOtr5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselOtr5" role="button" data-slide="next">
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
