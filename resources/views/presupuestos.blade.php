@extends('layouts.app')

@section('content')

@if (session('notification'))
  <div class="alert alert-success">
    {{ session('notification') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="container">
  <div class="py-5 text-center">
    <h2 class="featurette-heading" style="margin-top:50px;">Presupuesto </h2>
    <span class="text-muted">Por favor llene los espacios y tendremos su presupuesto en menos de 24 horas.</span>
  </div>
  <div class="row">
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Datos de Contacto</h4>


      <form class="needs-validation" method="post" action="{{ url('/presupuestos2') }}" novalidate enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombre">Nombre *</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="" value="{{ old('nombre') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="" value="{{ old('apellido') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="correo">Correo *</label>
            <input type="email" name="correo" class="form-control" id="correo" placeholder="correo@example.com" value="{{ old('correo') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="telefono">Teléfono *</label>
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="" value="{{ old('telefono') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="correo">Despacho</label>
            <input type="text" name="despacho" class="form-control" id="despacho" placeholder="" value="{{ old('despacho') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="telefono">Ubicación del Despacho</label>
            <input type="text" name="ubicacionDespacho" class="form-control" id="ubicacionDespacho" placeholder="" value="{{ old('ubicacionDespacho') }}">
          </div>
        </div>
        <h4 class="mb-3">Datos del Proyecto</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nombreProyecto">Nombre del Proyecto *</label>
            <input type="text" name="nombreProyecto" class="form-control" id="nombreProyecto" placeholder="" value="{{ old('nombreProyecto') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="ubicacion">Ubicación del Proyecto</label>
            <input type="text" name="uicacionProyecto" class="form-control" id="ubicacionProyecto" placeholder="" value="{{ old('ubicacionProyecto') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="tipoEstructura">Tipo de Estructura *</label>
            <select name="tipoEstructura" class="custom-select d-block w-100" id="tipoEstructura" value="{{ old('tipoEstructura') }}">
              <option value="">Elegir...</option>
              <option>Acero / Metálica</option>
              <option>Concreto / Hormigón</option>
              <option>Block / Fábrica / Mampostería</option>
              <option>Mixta</option>
              <option>Madera</option>
              <option>Otra</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="otra">Otra (especificar)</label>
            <input type="text" name="otra" class="form-control" id="otra" placeholder="" value="{{ old('otra') }}">
          </div>
          <div class="col-md-6 mb-3">
            <label for="servicioRequerido">Servicio Requerido *</label>
            <select name="servicioRequerido" class="custom-select d-block w-100" id="servicioRequerido" value="{{ old('servicioRequerido') }}">
              <option value="">Elegir...</option>
              <option>diseño estructural</option>
              <option>revisión</option>
              <option>consultoría</option>
              <option>otro</option>
            </select>
          </div>
          <div class="col-md-6 mb-3">
            <label for="m2Proyecto">m2 de proyecto *</label>
            <input type="text" name="m2Proyecto" class="form-control" id="m2Proyecto" placeholder="" value="{{ old('m2Proyecto') }}">
          </div>
          <div class="col-md-12 mb-3">
            <label for="mensaje">Mensaje *<span class="text-muted"></span></label>
            <textarea rows="5" cols="50" type="text" class="form-control" id="mensaje" name="mensaje" placeholder="escriba aquí su mensaje ...">{{ old('mensaje') }}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <label for="adjuntar">Adjuntar un documento</label>
            <input type="file" name="adjuntar" class="form-control" id="adjuntar" placeholder="... seleccione un archivo para adjuntar ...">
          </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>


    </div>
  </div>

  <hr class="mb-4">

</div>

@endsection