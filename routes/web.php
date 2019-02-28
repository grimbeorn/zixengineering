<?php
// HOME
Route::get('/', function () {
    return view('home');
});

// SERVICIOS
Route::get('/equipo', function () {
    return view('equipo');
});
Route::get('/servicioPersonalizado', function () {
    return view('servicioPersonalizado');
});
Route::get('/reduccionCostos', function () {
    return view('reduccionCostos');
});

// PROYECTOS
Route::get('/proyectosResidencial', function () {
    return view('proyectosResidencial');
});
Route::get('/proyectosIndustrial', function () {
    return view('proyectosIndustrial');
});
Route::get('/proyectosInfraestructura', function () {
    return view('proyectosInfraestructura');
});
Route::get('/proyectosRD', function () {
    return view('proyectosRD');
});
Route::get('/proyectosOtros', function () {
    return view('proyectosOtros');
});

// PRESUPUESTOS
Route::get('/presupuestos', function () {
    return view('presupuestos');
});

//  CONTACTO
Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/contact2', 'contact2Controller@send');
Route::post('/presupuestos2', 'presupuestos2Controller@send');
