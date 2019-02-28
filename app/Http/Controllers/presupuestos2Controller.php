<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewPresupuestos2;
use App\Http\Controllers\Input;
use Mail;

class presupuestos2Controller extends Controller
{
    public function send(Request $request)
    {
        $messages=[
           'nombre.required'=>'Es necesario ingresar un nombre',
           'correo.required'=>'Es necesario ingresar un correo',
           'telefono.required'=>'Es necesario ingresar un telefono',
           'nombreProyecto.required'=>'Es necesario ingresar un nombre del proyecto',
           'tipoEstructura.required'=>'Es necesario ingresar el tipo de estructura',
           'servicioRequerido.required'=>'Es necesario ingresar el tipo de servicio requerido',
           'm2Proyecto.required'=>'Es necesario ingresar los m2 del proyecto',
           'mensaje.required'=>'Es necesario ingresar un mensaje'
        ];
        $rules=[
            'nombre'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'mensaje'=>'required',
            'nombreProyecto'=>'required',
            'tipoEstructura'=>'required',
            'servicioRequerido'=>'required',
            'm2Proyecto'=>'required'
        ];
        $this->validate($request, $rules, $messages);

        // datos persona
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
    	$correo = $request->input('correo');
    	$telefono = $request->input('telefono');
        $despacho = $request->input('despacho');
        // datos proyecto
        $ubicacionDespacho = $request->input('ubicacionDespacho');
        $nombreProyecto = $request->input('nombreProyecto');
        $ubicacionProyecto = $request->input('ubicacionProyecto');
        $tipoEstructura = $request->input('tipoEstructura');
        $otra = $request->input('otra');
        $servicioRequerido = $request->input('servicioRequerido');
        $m2Proyecto = $request->input('m2Proyecto');
    	$mensaje = $request->input('mensaje');

        //
        $adjuntar = $request->file('adjuntar');
        //

        // $docAdjunto = $request->file('adjuntar');
        $data = [
            'adjuntar'=>$adjuntar
        ];







    	Mail::to('hernandomtz@gmail.com')->send(new NewPresupuestos2($nombre, $apellido, $correo, $telefono, $despacho, $ubicacionDespacho, $nombreProyecto, $ubicacionProyecto, $tipoEstructura, $otra, $servicioRequerido, $m2Proyecto, $mensaje, $adjuntar, $data));
        // Mail::to('diego@barrafrancamexico.com')->send(new NewPresupuestos2($nombre, $apellido, $correo, $telefono, $nombreProyecto, $ubicacionDespacho, $ubicacionProyecto, $tipoEstructura, $otra, $servicioRequerido, $m2Proyecto, $mensaje, $adjuntar));

    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}