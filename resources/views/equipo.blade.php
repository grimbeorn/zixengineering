@extends('layouts.app')

@section('content')
<main role="main">
  <div class="container marketing">
    <h2 class="featurette-heading" style="margin-top:50px;">Zix Ingeniería. Equipo</h2>
    <a name="servicios 01"></a>
    <hr class="featurette-divider">
    <div class="row mb-2">
        <div class="col-md-12">
          <div class="card border-light flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text mb-auto">El equipo de <strong>zIX Ingeniería</strong> el equipo está conformado por ingenieros y arquitectos con formación estructural, mecánica y de gestión, con experiencia probada en las áreas técnicas en las que tenemos desempeño.<br>
                 - Hernando Martínez. M. en I. Estructural. I.C. <br>
                 - Felipe Martínez. I. Mecánico.<br>
                 - Miguel Hernández. M. en I. Estructural. Arq.<br>
                 - Andrés Álvarez. MBA. I.C.<br>
                 - Luis Álvarez. MBA. Arq.<br>
                 - Diego Martínez. MPM. M. en I. Estructuras Aeroespaciales. I.C.
              </p>
            </div>
            <img class="img-fluid" src="{{ asset('imgs/01.servicios/03.equipo/11-warehouse.jpg') }}" style="height:305px; width:300" alt="Card image cap">
          </div>
        </div>
      </div>
    <hr class="featurette-divider">
  </div>
</main>
@endsection
