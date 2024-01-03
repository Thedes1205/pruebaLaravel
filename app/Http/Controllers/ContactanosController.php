<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactanosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }

    public function index(){

        return view('contactanos.index');
    }

    public function store(Request $request){

        // $hola=mb_substr($request->mensaje,0,10,'UTF-8');
        // // $hola=html_entity_decode($hola, ENT_NOQUOTES, 'UTF-8');
        // dd($hola);
        // $request->validate([
        //     'mensaje'=>'required|max:255|min:10|regex:/[A-Za-z éá-úÁÉÍÓÚñÑ ]+/',
        //     // 'categoria'=>'required|max:255|min:4|regex:/(duda|comentario|reporte)/',
        // ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('PEEES-CUCEI@gmail.com')->send($correo);
        return redirect('/inicio')->with('correo', 'ok');

    }
}
