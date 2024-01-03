<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;

class ReplyController extends Controller
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
        $respuestas = Reply::with('question','user')->get();


        return view('foro.concentrado',  compact('respuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foro.respuestas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message'=>'required',
            'question_id'=>'required'
        ]);


        $request->merge(['user_id'=> Auth::id()]);
        $id = $request->question_id;
        Reply::create($request->all());

        return redirect('question')->with('respuesta','ok');
        // 'contacto', $libro->user->id
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
$questions= Question::where('id',$id)->get();
// $questions->loadMissing('reply','user');
$question = $questions[0];
// dd($question);
        return view("foro.respuestas", compact('question'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
