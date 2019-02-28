<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('imgs/favicon.ico') }}">
    <title>zIX Engineering</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <style type="text/css">
      .modal-dialog {
                    width: 78%;
                    height: auto;
                    padding: 2;
                    }
      .modal-content {
                    width: 88%;
                    height: auto;
                    min-height: 100%;
                    border-radius: 5;
                    padding: 2;
                    }
      .modal-lg {
                  max-width: 90%;
                }
      td.details-control {
        /*background: url('../resources/details_open.png') no-repeat center center;*/
        background: url('../resources/details_open.png') no-repeat center center;
        cursor: pointer;
      }
      tr.shown td.details-control {
          /*background: url('../resources/details_close.png') no-repeat center center;*/
          background: url('../resources/details_close.png') no-repeat center center;
      }
    </style>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">zIX Ingeniería</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/reduccionCostos">Reducción de Costos</a>
                <a class="dropdown-item" href="/servicioPersonalizado">Servicio Personalizado</a>
                <a class="dropdown-item" href="/equipo">Equipo</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="proyectos.html" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/proyectosResidencial">Residencial</a>
                <a class="dropdown-item" href="/proyectosIndustrial">Industrial</a>
                <a class="dropdown-item" href="/proyectosInfraestructura">Infraestructura</a>
                <a class="dropdown-item" href="/proyectosRD">R + D</a>
                <a class="dropdown-item" href="/proyectosOtros">Otros</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/presupuestos">Presupuestos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacto">Contacto</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2018-2019 Barrafranca S.A. de C.V. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- Scripts --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-slim.min.js') }}"><\/script>')</script>
    <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{ asset('js/vendor/holder.min.js') }}"></script>

    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/holder/2.9.0/holder.min.js"></script>

  </body>
</html>
