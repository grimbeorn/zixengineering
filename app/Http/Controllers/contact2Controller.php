<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact2;
use App\Http\Controllers\Input;
use Mail;

class contact2Controller extends Controller
{
    public function send(Request $request)
    {
        $messages=[
            'nombre.required'=>'Es necesario ingresar un nombre',
            'correo.required'=>'Es necesario ingresar un correo',
            'telefono.required'=>'Es necesario ingresar un telefono',
            'mensaje.required'=>'Es necesario ingresar un mensaje'
        ];
        $rules=[
            'nombre'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
            'mensaje'=>'required'
        ];

        $this->validate($request, $rules, $messages);

        $n = $request->input('nombre');
    	$c = $request->input('correo');
    	$t = $request->input('telefono');
    	$m = $request->input('mensaje');

    	Mail::to('hernandomtz@gmail.com')->send(new NewContact2($n, $c, $t, $m));
        // Mail::to('diego@barrafrancamexico.com')->send(new NewContact2($n, $c, $t, $m));


    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}
