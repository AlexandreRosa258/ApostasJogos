<?php

namespace App\Http\Controllers;


use App\Logo;
use App\Partida;
use PDF;
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
        // $time1 = DB::table('time1','logo.id' ,'=', 'partidas.time1')->get();
        // $time2 = DB::table('time2','logo.id' ,'=', 'partidas.time1')->get();
        return view('partida.index',compact('partidas'));
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
            'fundo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'informacao' => 'required',
        ]);
        $partida = Partida::create(request()->all());

        if ($request->file('fundo')) {
            $imagePath = $request->file('fundo');
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file('fundo')->storeAs('FundoImagem', $imageName,'public');
          }


        $partida->time1 = $request->time1;
        $partida->time2 = $request->time2;
        $partida->data = $request->data;
        $partida->hora = $request->hora;
        $partida->local = $request->local;
        $partida->informacao = $request->informacao;
        $partida->fundo = '/storage/'.$path;

        $partida->save();

        return redirect('/partida');
    }

     // Generate PDF
     public function createPDF() {
        // retreive all records from db
        $data = Partida::all();

        // share data to view
        view()->share('partida',$data);

        $pdf = PDF::loadView('partida.banner', $data);

        // download PDF file with download method
        return $pdf->download('banner.pdf');
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
