<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Landing;
use App\Recolector;
use Illuminate\Support\Facades\Input;
use DB;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landings = Landing::orderBy('id')->paginate(10);
        $recolectores = Recolector::all();
        return view('landing.lista_landings', compact('landings', 'recolectores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $landing = new Landing;
        $landing->CodRecolector = $request->Recolector;
        $landing->Titulo = $request->Titulo;
//        $landing->URL = $request->URL;
        $landing->Inicio = FechaParaMySQL($request->Inicio);
        $landing->Fin = FechaParaMySQL($request->Fin);
        $landing->save();        
        
        $recolector = Recolector::findOrFail($request->Recolector);        
        $nombre = str_replace(" ", "-", $recolector->Nombre);
        
        $archivo = "landing".$landing->id.".php";
        $control = fopen(public_path().'/landings/'.$nombre.'/'.$archivo,"w+");
        fclose($control);
        
        Landing::where('id', $landing->id)->update(
        [
            'URL' => 'dechali.com/leads/'.$nombre.'/'.$archivo                
        ]);
        
        return redirect('Landing');
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
        $landing = Landing::findOrFail($id); 
        $landing->CodRecolector = $request->nuevo1;
        $landing->Titulo = $request->nuevo2;
//        $landing->URL = $request->nuevo3;
        $landing->Inicio = FechaParaMySQL($request->nuevo4);
        $landing->Fin = FechaParaMySQL($request->nuevo5);
        $landing->update();  
        
        return redirect('Landing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $landing = Landing::findOrFail($id);                    
        $landing->delete();    
        return redirect('Landing');
    }
    
    /**
     * mandar plantilla seleccionada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function plantilla()
    {
//        $num_p = Input::get('num_p');
//        $id = Input::get('id');
        
        $num_p = $_GET['num_p'];
        $id = $_GET['id'];
        
        return url('plantilla'.$num_p, $id);
        
//        $landing = Landing::findOrFail($id);
//        $nombre = Recolector::where('id', '=', $landing->CodRecolector)->get()->first();
////        $nombre = DB::table('recolectores')->where('id', '=', $landing->CodRecolector)->select('*')->first();
//        return view('plantillas.plantilla'.$num_p, compact('id', 'landing', 'nombre'));
    }
}
