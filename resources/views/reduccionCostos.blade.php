@extends('layouts.app')

@section('content')
<main role="main">
  <div class="container marketing">
    <h2 class="featurette-heading" style="margin-top:50px;">Zix Ingeniería. Reducción de Costos</h2>
    <a name="servicios 01"></a>
    <hr class="featurette-divider">
    <div class="row mb-2">
        <div class="col-md-12">
          <div class="card border-light flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text mb-auto">En <strong>zIX Ingeniería</strong> estamos centrados en cada proyecto en buscar la eficiencia y mejor funcionamiento de la estructura, interactuando con todas las partes involucradas en las distintas fases del proyecto, desde la planeación, diseño, ejecución y mantenimiento.
                Sabemos que la optimización de costos y tiempos es una prioridad que debe acompañar a la obra desde sus fases iniciales hasta la operación y vida diaria del proyecto.
                Así, hemos logrado en casos concretos, reducciones importantes de concreto, varillas y acero laminado, y por tanto también de mano de obra, en distintos proyectos como naves industriales, cimentaciones y otros. Siendo estas reducciones de materiales no sólo un trabajo de cálculo, sino también de diseño.
                Naturalmente dichas reducciones no comprometen el cumplimiento de la normativa de vigente de cada zona o país donde se han realizado.
                En definitiva, nuestro quehacer no se limita a un cálculo exclusivamente numérico, sino que se extiende a la busqueda de mejora de soluciones, avaladas por la técnica estructural.</p>
            </div>
            <img class="img-fluid" src="{{ asset('imgs/01.servicios/01.reduccionCostos/08-warehouse.jpg') }}" style="height:305px; width:300" alt="reduccionCostos_01">
          </div>
        </div>
      </div>
    <hr class="featurette-divider">
  </div>
</main>
@endsection
