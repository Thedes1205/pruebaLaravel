<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use PDF;

class RegistrationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::all();
        if (Gate::allows('administrador'))
        return view('registroIndex', compact('registrations'));
        else
        return redirect('/');
    }

    public function pdf()
    {
        if(Auth::user()->registration){
       $registration = Auth::user()->registration;

       $pdf = PDF::loadView('pdf', ['registration'=>$registration])->setOptions(['defaultFont' => 'sans-serif']);

       return $pdf -> stream('solicitud.pdf');}
       else{
        return redirect('/');
       }

    //    return view('pdf', compact('registration'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('form');  //

        $registration= Auth::user()->registration;
        if ($registration != null){
            return redirect('/')->with('solicitud','ok');
        }
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
         $request->validate([
            'lastname'=>'required|max:255|required|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'firstname'=>'required|max:255|required|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'phone'=>'required|numeric|max:9999999999|min:0000000001',
            'registration_number'=>'required|numeric|max:9999999999|min:1|unique:registrations',
            'career'=>'required|max:255|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ \.]+$/',
            'grade'=>'required|numeric|min:1|max:15',
            'gpa'=>'required|numeric|max:100|min:0.00',
            'shift'=>'required|alpha|max:50|min:5',
            'age'=>'required|numeric|min:1|max:100',
            'gender'=>'required|alpha|max:10|min:5',
            'school'=>'required|alpha|max:255|min:4',
            'modality'=>'required|max:255|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'code'=>'required|numeric|max:999999999|min:000000001',
            'place'=>'required|alpha|max:255|min:4',
        ]);
        $registro=Registration::where('user_id',Auth::id())->get();
        if($registro)
        Registration::where('user_id',Auth::id())->forceDelete();
        $request->merge(['user_id'=> Auth::id()]);
        $user=Auth::user();
        $request->merge(['email'=>$user->email]);

        Registration::create($request->all());


        return redirect('/')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        if (Gate::allows('administrador')){
        return view('registroShow', compact('registration'));
        }
        else{
            if(Auth::user()->registration){
                if(Auth::user()->registration->id==$registration->id){
                    return view('perfil', compact('registration'));}
                else{
                    return redirect('/');
                }
            }
            else{
                return redirect('/');
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        if(Auth::user()->registration){
            if(Auth::user()->registration->id==$registration->id){
                return view('editform', compact('registration'));}
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'lastname'=>'required|max:255|required|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'firstname'=>'required|max:255|required|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'phone'=>'required|numeric|max:9999999999|min:0000000001',
            'registration_number'=>'required|numeric|max:9999999999|min:1',
            'career'=>'required|max:255|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ \.]+$/',
            'grade'=>'required|numeric|min:1|max:15',
            'gpa'=>'required|numeric|max:100|min:0.00',
            'shift'=>'required|alpha|max:50|min:5',
            'age'=>'required|numeric|min:1|max:100',
            'gender'=>'required|alpha|max:10|min:5',
            'school'=>'required|alpha|max:255|min:4',
            'modality'=>'required|max:255|min:4|regex:/^[A-Za-z éá-úÁÉÍÓÚñÑ ]+$/',
            'code'=>'required|numeric|max:999999999|min:000000001',
            'place'=>'required|alpha|max:255|min:4',
        ]);
        Registration::where('id',$registration->id)->update($request->except(['_token','_method','terms']));
        return redirect('/inicio')->with('editar','ok');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
        $registration->delete();
        return redirect('/inicio')->with('eliminar','ok');
    }


    public function navBar(Registration $registration)
    {
        $registration = Auth::user()->registration->id;

        return view('components/navbar', compact('registration'));
    }
}
