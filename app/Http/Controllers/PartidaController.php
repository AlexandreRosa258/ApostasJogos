<?php

namespace App\Http\Controllers;


use App\Logo;
use App\Partida;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidas = Partida::all();
        $partidas2 = DB::table('partidas')->join('logos','logos.id','=','partidas.time1')
        ->select('partidas.*','partidas.time2')->get()->toArray();
        return view('partida.index',compact('partidas','partidas2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jogos = new Partida();
        $logos = Logo::all();
        return view('partida.create',compact('jogos','logos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'time1'=> 'required',
            'time2'=> 'required',
            'data' => 'required',
            'hora' => 'required',
            'local'=>'required',
            'informacao' => 'required',
        ]);
        $partida = new Partida();
        $partida->time1 = $request->time1;
        $partida->time2 = $request->time2;
        $partida->data = $request->data;
        $partida->hora = $request->hora;
        $partida->local = $request->local;
        $partida->informacao = $request->informacao;

        $partida->save();

        return redirect('/partida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
