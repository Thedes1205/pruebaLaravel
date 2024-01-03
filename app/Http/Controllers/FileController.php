<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use PDF;

class FileController extends Controller
{
    //     $file=$request->file("file");
    //     $nombre="expediente_".time().".".$file->guessExtension();
    //     $ruta=public_path("pdf/".$nombre);
    //    // if($file->guessExtension()=="pdf"){
    //     // Storage::disk('local')->put("hola.pdf","hola");
    //     copy($file,$ruta);
    //         File::create([
    //             'validate'=>"pdf/".$nombre,
    //         ]);
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');

    }
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        if (Gate::allows('administrador')){
        $files = File::with('status')->get();
        // $files = File::all();
        return view('pdfs',compact('files'));}
        else{
            return redirect('/');//->with('expediente','ok');
        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $file= Auth::user()->registration;
        if (!empty($file)){
        $file2=$file->file;
        // dd($file);
        if (!empty($file2)){
            return redirect('/')->with('expediente','ok');
        }
        // return view('form');
      return view('expediente'); }
      else{
        return redirect('/')->with('nosolicitud','ok');
      } //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'file'=>'required|file',
            // 'solicitud'=>'required|file',
            // 'socieconomico'=>'required|file',
            // 'compromiso'=>'required|file',
            // 'recomendacion'=>'required|file',
            // 'ingresos'=>'required|file',
            // 'domicilio'=>'required|file',
            // 'kardex'=>'required|file',
            // 'situacion'=>'required|file',
            // 'curp'=>'required|file',
        ]);
        if(
            // $request->hasFile("solicitud")&&$request->file("solicitud")->guessExtension()=="pdf"&&
            // $request->hasFile("socieconomico")&&$request->file("socieconomico")->guessExtension()=="pdf"&&
            // $request->hasFile("compromiso")&&$request->file("compromiso")->guessExtension()=="pdf"&&
            // $request->hasFile("recomendacion")&&$request->file("recomendacion")->guessExtension()=="pdf"&&
            // $request->hasFile("ingresos")&&$request->file("ingresos")->guessExtension()=="pdf"&&
            // $request->hasFile("domicilio")&&$request->file("domicilio")->guessExtension()=="pdf"&&
            // $request->hasFile("kardex")&&$request->file("kardex")->guessExtension()=="pdf"&&
            // $request->hasFile("situacion")&&$request->file("situacion")->guessExtension()=="pdf"&&
            // $request->hasFile("curp")&&$request->file("curp")->guessExtension()=="pdf"
            $request->hasFile("file")&&$request->file("file")->guessExtension()=="pdf"
        ){
        $archivo=$request->file;
        // $solicitud=$request->solicitud;
        // $socieconomico=$request->socieconomico;
        // $compromiso=$request->compromiso;
        // $recomendacion=$request->recomendacion;
        // $ingresos=$request->ingresos;
        // $domicilio=$request->domicilio;
        // $kardex=$request->kardex;
        // $situacion=$request->situacion;
        // $curp=$request->curp;
        //  dd($request->all());
        if(
            $archivo->isValid()
            // $solicitud->isValid()&&
            // $socieconomico->isValid()&&
            // $compromiso->isValid()&&
            // $recomendacion->isValid()&&
            // $ingresos->isValid()&&
            // $domicilio->isValid()&&
            // $kardex->isValid()&&
            // $situacion->isValid()&&
            // $curp->isValid()
        ){
            // dd($archivo);
            $pathFile=$archivo->store('pdfs');
        // $pathsolicitud=$solicitud->store('pdfs');
        // $pathsocieconomico=$socieconomico->store('pdfs');
        // $pathcompromiso=$compromiso->store('pdfs');
        // $pathrecomendacion=$recomendacion->store('pdfs');
        // $pathingresos=$ingresos->store('pdfs');
        // $pathdomicilio=$domicilio->store('pdfs');
        // $pathkardex=$kardex->store('pdfs');
        // $pathsituacion=$situacion->store('pdfs');
        // $pathcurp=$curp->store('pdfs');
        $registration= Auth::user()->registration;
         $file= File::create([
                        'registration_id'=>$registration->id,
                         'pathFile'=>$pathFile,
                         'mimeFile'=>$archivo->getClientMimeType(),
                        //  'pathSolicitud'=>$pathsolicitud,
                        //  'pathSocieconomico'=>$pathsocieconomico,
                        //  'pathCompromiso'=>$pathcompromiso,
                        //  'pathRecomendacion'=>$pathrecomendacion,
                        //  'pathIngresos'=>$pathingresos,
                        //  'pathDomicilio'=>$pathdomicilio,
                        //  'pathKardex'=>$pathkardex,
                        //  'pathSituacion'=>$pathsituacion,
                        //  'pathCurp'=>$pathcurp,
                        //  'mimeSolicitud'=>$solicitud->getClientMimeType(),
                        //  'mimeSocieconomico'=>$socieconomico->getClientMimeType(),
                        //  'mimeCompromiso'=>$compromiso->getClientMimeType(),
                        //  'mimeRecomendacion'=>$recomendacion->getClientMimeType(),
                        //  'mimeIngresos'=>$ingresos->getClientMimeType(),
                        //  'mimeDomicilio'=>$domicilio->getClientMimeType(),
                        //  'mimeKardex'=>$kardex->getClientMimeType(),
                        //  'mimeSituacion'=>$situacion->getClientMimeType(),
                        //  'mimeCurp'=>$curp->getClientMimeType(),
                        ]);
                        // dd($file->all());
                        Status::create(['message'=>"Pendiente de revision",
                        'file_id'=>$file->id,
                        'status'=>"En revision"]);
                    }
            }else{
                    return back()->with('noPDF','ok');
                }
                return redirect("/")->with('crearex','ok');

                //}
                //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        // dd($file);
        // $user=Auth::user();
        // $user->email=="admin@admin.com";
        // // return response()->download($file->nombre_hash);
        if(!Gate::allows('administrador'))
        abort(403);
        $header = ['Content-Type'=>$file->mimeFile];
        $numero=$file->registration->registration_number;
        $NombreArchivo="Expediente_".$numero.".pdf";
        // $header = ['Content-Type'=>$file->mimeCurp];
        // $Solicitud="Solicitud_".$file->user_id.".pdf";
        // $Socieconomico="Socieconomico_".$file->user_id.".pdf";
        // $Compromiso="Compromiso_".$file->user_id.".pdf";
        // $Recomendacion="Recomendacion_".$file->user_id.".pdf";
        // $Ingresos="Ingresos_".$file->user_id.".pdf";
        // $Domicilio="Domicilio_".$file->user_id.".pdf";
        // $Kardex="Kardex_".$file->user_id.".pdf";
        // $Situacion="Situacion_".$file->user_id.".pdf";
        // $Curp="Curp_".$file->user_id.".pdf";
        // dd($file->pathSocieconomico);
        Storage::download($file->pathFile,$NombreArchivo,$header);
        return Storage::download($file->pathFile,$NombreArchivo,$header);
        // return Storage::download($file->pathSocieconomico,$Socieconomico,$header);
        // return Storage::download($file->pathSolicitud,$Solicitud,$header);
        // return Storage::download($file->pathCompromiso,$Compromiso,$header);
        // return Storage::download($file->pathRecomendacion,$Recomendacion,$header);
        // return Storage::download($file->pathIngresos,$Ingresos,$header);
        // return Storage::download($file->pathDomicilio,$Domicilio,$header);
        // return Storage::download($file->pathKardex,$Kardex,$header);
        // return Storage::download($file->pathSituacion,$Situacion,$header);
        // return Storage::download($file->pathCurp,$Curp,$header);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        // dd($file->all());
        Storage::delete($file->pathFile);
        $file->status->document_errors;
        $file->delete();
        return redirect('/file/create')->with('eliminarfile','ok');
    }
}
