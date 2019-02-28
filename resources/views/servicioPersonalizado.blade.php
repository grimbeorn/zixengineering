@extends('layouts.app')

@section('content')
<main role="main">
  <div class="container marketing">
    <h2 class="featurette-heading" style="margin-top:50px;">Zix Ingeniería. Servicio Personalizado</h2>
    <a name="servicios 01"></a>
    <hr class="featurette-divider">
    <div class="row mb-2">
        <div class="col-md-12">
          <div class="card border-light flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <p class="card-text mb-auto">En <strong>zIX Ingeniería</strong> a atención a cada uno de nuestros clientes es clave para lograr los objetivos del proyecto, que siempre se ve condicionado por cuestiones económicas, estéticas, funcionales, operativas, de seguridad y otros factores.
                Así, ejercemos un acompañamiento a la propiedad, al arquitecto, project manager, constructor o cualquier especialista involucrado en cualquier fase de proyecto. 
                Ejemplo de lo anterior es el apoyo brindado en:<br>
                 - fases de concurso<br>
                 - ante presupuestos: aproximación de costes, lo más realista posible,   anterior a un proyecto ejecutivo estructural<br>
                 - procesos constructivos<br>
                 - inspección estructural<br>
                 - previsión de cargas<br>
                En definitiva, hacemos del acercamiento con el cliente un valor añadido.
              </p>
            </div>
            <img class="img-fluid" src="{{ asset('imgs/01.servicios/02.servicioPersonalizado/arquitectos.jpg') }}" style="height:305px; width:300" alt="Card image cap">
          </div>
        </div>
      </div>
    <hr class="featurette-divider">
  </div>
</main>
@endsection
