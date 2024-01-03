<?php

namespace App\Http\Controllers;

use App\Mail\CitaMailable;
use App\Models\Document;
use App\Models\Document_Error;
use App\Models\Error;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class StatusController extends Controller
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
        return redirect('/');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        // dd($status->documents);
//         // foreach($status->documents as $error)

// $status->with('documents','errors');
        // dd($error->errors);
        if(!Gate::allows('EsUsuarioStatus',$status))
        abort(403);
        else
        return view('descargadedatos',compact('status'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        // dd($status->all());
        if (Gate::allows('administrador')){
        $errores = Error::all();
        $documentos=Document::all();
// dd($errors);
        // $registrations = Registration::all();
        return view('statusEdit',compact('status' , 'errores','documentos'));
        }
        else{
            return redirect('/');
        }
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        // $status->file->registration->user->email
        $documentos = Document::all();
        foreach ($documentos as $document){

            foreach ($request->get($document->id) as $error_id){
                Document_Error::create([
                'status_id'=>$status->id,
                'document_id'=>$document->id,
                    'error_id'=>$error_id,
                ]);}
                // $request->forget($document->id);
        }
        // dd($request->all());
        Status::where('id',$status->id)->update($request->except(['_token','_method','1','2','3','4','5','6','7','8','9'
    ]));
        if($request->status=="Todo bien"){
            $request->merge([
                'email'=>$status->file->registration->user->email,
                'firstname'=>$status->file->registration->firstname,
                'lastname'=>$status->file->registration->lastname,
                'registration_number'=>$status->file->registration->registration_number
        ]);

        $correo = new CitaMailable($request->all());
        Mail::to($status->file->registration->user->email)->send($correo);}
        return redirect('/file')->with('editar','ok');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        return redirect('/');
        //
    }
}
