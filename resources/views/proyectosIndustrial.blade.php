@extends('layouts.app')

@section('content')
<div class="container marketing">
  <h2 class="featurette-heading" style="margin-top:50px;">Proyectos. Industriales</h2><br>
  <p class="lead">A continuación se presentan algunos de los proyectos INDUSTRIALES en los que hemos participado:</p><br>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m1"> Nave Industrial San Luis Potosí</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m2"> Nave Industrial Querétaro</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m3"> Refuerzo de nave industrial L'Oreal por cambio de uso</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m4"> Refuerzo de nave industrial Fandeli por aumento de cargas en cubierta</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m5"> Cubierta de granja de tanques</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m6"> Plataforma de equipo eléctrico</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m7"> Rack de distribución de instalaciones</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m8"> Cimentación de silos I de cemento</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m9"> Cimentación de silos II de cemento</a>
    <a href="#" class="list-group-item" data-toggle="modal" data-target="#m10"> Losas de tránsito y de cubierta</a>
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
        <div id="myCarouselInd1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd1" data-slide-to="1"></li>
            <li data-target="#myCarouselInd1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/1/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/1/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/1/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd1" role="button" data-slide="next">
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
        <div id="myCarouselInd2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd2" data-slide-to="1"></li>
            <li data-target="#myCarouselInd2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/2/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/2/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/2/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd2" role="button" data-slide="next">
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
        <div id="myCarouselInd3" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd3" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd3" data-slide-to="1"></li>
            <li data-target="#myCarouselInd3" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/3/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/3/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/3/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd3" role="button" data-slide="next">
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
        <div id="myCarouselInd4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd4" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd4" data-slide-to="1"></li>
            <li data-target="#myCarouselInd4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/4/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/4/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/4/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd4" role="button" data-slide="next">
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
        <div id="myCarouselInd5" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd5" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd5" data-slide-to="1"></li>
            <li data-target="#myCarouselInd5" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/5/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/5/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/5/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd5" role="button" data-slide="next">
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
        <div id="myCarouselInd6" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd6" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd6" data-slide-to="1"></li>
            <li data-target="#myCarouselInd6" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/6/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/6/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/6/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd6" role="button" data-slide="next">
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
        <div id="myCarouselInd7" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd7" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd7" data-slide-to="1"></li>
            <li data-target="#myCarouselInd7" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/7/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/7/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/7/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd7" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd7" role="button" data-slide="next">
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
        <div id="myCarouselInd8" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd8" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd8" data-slide-to="1"></li>
            <li data-target="#myCarouselInd8" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/8/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/8/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/8/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd8" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd8" role="button" data-slide="next">
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
        <div id="myCarouselInd9" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd9" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd9" data-slide-to="1"></li>
            <li data-target="#myCarouselInd9" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/9/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/9/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/9/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd9" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd9" role="button" data-slide="next">
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
        <div id="myCarouselInd10" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarouselInd10" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouselInd10" data-slide-to="1"></li>
            <li data-target="#myCarouselInd10" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="{{ asset('imgs/02.proyectos/02.industrial/10/1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="{{ asset('imgs/02.proyectos/02.industrial/10/2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="{{ asset('imgs/02.proyectos/02.industrial/10/3.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarouselInd10" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarouselInd10" role="button" data-slide="next">
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

