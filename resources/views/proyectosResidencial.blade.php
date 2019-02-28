@extends('layouts.app')

@section('content')
<div class="container marketing">
  <h2 class="featurette-heading" style="margin-top:50px;">Proyectos. Residenciales</h2><br>
  <p class="lead">A continuación se presentan algunos de los proyectos RESIDENCIALES en los que hemos participado:</p><br>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m1"> Edificio Rómulo O'Farril</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m2"> Casa Sky</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m3"> Casa Tequesquitengo</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m4"> Casa Obraje 1</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m5"> Casa Obraje 2</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m6"> Casa Obraje 3</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m7"> Casa Obraje 4</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m8"> Vivienda Suas Viñas Arriba</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m9"> Vivienda Suas Viñas Abajo</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m10"> Optimización de Losa de Vivienda AlAndalus</a>
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
        <div id="myCarouselRes1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes1" data-slide-to="1"></li>
            <li data-target="#myCarouselRes1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/1/1.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/1/1.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/1/1.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes1" role="button" data-slide="next">
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
        <div id="myCarouselRes2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes2" data-slide-to="1"></li>
            <li data-target="#myCarouselRes2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/2/2.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/2/2.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/2/2.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes2" role="button" data-slide="next">
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
        <div id="myCarouselRes3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes3" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes3" data-slide-to="1"></li>
            <li data-target="#myCarouselRes3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/3/3.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/3/3.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/3/3.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes3" role="button" data-slide="next">
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
        <div id="myCarouselRes4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes4" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes4" data-slide-to="1"></li>
            <li data-target="#myCarouselRes4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/4/4.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/4/4.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/4/4.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes4" role="button" data-slide="next">
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
        <div id="myCarouselRes5" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes5" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes5" data-slide-to="1"></li>
            <li data-target="#myCarouselRes5" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/5/5.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/5/5.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/5/5.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes5" role="button" data-slide="next">
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

<!-- Modal 6 -->
<div class="modal fade" id="m6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRes6" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes6" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes6" data-slide-to="1"></li>
            <li data-target="#myCarouselRes6" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/6/6.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/6/6.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/6/6.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes6" role="button" data-slide="next">
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

<!-- Modal 7 -->
<div class="modal fade" id="m7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRes7" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes7" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes7" data-slide-to="1"></li>
            <li data-target="#myCarouselRes7" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/7/7.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/7/7.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/7/7.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes7" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes7" role="button" data-slide="next">
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

<!-- Modal 8 -->
<div class="modal fade" id="m8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRes8" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes8" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes8" data-slide-to="1"></li>
            <li data-target="#myCarouselRes8" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/8/8.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/8/8.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/8/8.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes8" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes8" role="button" data-slide="next">
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

<!-- Modal 9 -->
<div class="modal fade" id="m9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRes9" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes9" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes9" data-slide-to="1"></li>
            <li data-target="#myCarouselRes9" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/9/9.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/9/9.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/9/9.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes9" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes9" role="button" data-slide="next">
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

<!-- Modal 10 -->
<div class="modal fade" id="m10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="myCarouselRes10" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselRes10" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselRes10" data-slide-to="1"></li>
            <li data-target="#myCarouselRes10" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/10/10.1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/10/10.2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/01.residenciales/10/10.3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselRes10" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselRes10" role="button" data-slide="next">
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

