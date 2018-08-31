<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recolector;
use App\Landing;
use App\Formulario;
use DB;
use Carbon\Carbon;
use App\MaestroCombo;
use App\DetalleCombo;
use Illuminate\Support\Facades\Input;
use Barryvdh\DomPDF\Facade as PDF;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectores = Recolector::all();
        $landings = Landing::where('CodRecolector', '=', '1')->get();
        return view('reportes.busqueda_inscritos', compact('recolectores', 'landings'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $recolectores = Recolector::all();
        $landings = Landing::where('CodRecolector', '=', '1')->get();
        return view('reportes.busqueda_landings', compact('recolectores', 'landings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hoy = Carbon::now();
        $CodRecolector = $request->Recolector;
        if($CodRecolector == 0){
            $recolector = Recolector::all();
            $landing = Landing::all();
        }else{
            $recolector = Recolector::where('id', '=', $CodRecolector)->get()->first();
            $landing = Landing::where('CodRecolector', '=', $CodRecolector)->get();
        }        
        
        $estado = $request->Recolector;
        
        $pdf = PDF::loadView('reportes.reporte_landings', ['hoy' => $hoy,'recolector' => $recolector, 'landing' => $landing, 'estado' => $estado]);
        return $pdf->setPaper('letter', 'portrait')->stream('landings.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hoy = Carbon::now();
        $d = $request->Desde;
        $h = $request->Hasta;
        $CodLanding = $request->Landing;
        $CodRecolector = $request->Recolector;
        $recolector = Recolector::where('id', '=', $CodRecolector)->get()->first();
        $landing = Landing::where('id', '=', $CodLanding)->get()->first();
        
        $Desde = strtr($request->Desde, '-', '/');
        $Desde = implode('/', array_reverse(explode('/', $Desde)));
        
        $Hasta = strtr($request->Hasta, '-', '/');
        $Hasta = implode('/', array_reverse(explode('/', $Hasta)));
        
        $sql = "SELECT *
                FROM visitantes
                WHERE CodLanding='$CodLanding' ";
        if($Desde!='')
            $sql .= "and '$Desde'<=FechaHora ";
        if($Hasta!='')
            $sql .= "AND '$Hasta'>=FechaHora ";
        $sql .= "ORDER BY id "; 
        $visitantes = DB::select($sql);
        
        $campos = Formulario::where('CodLanding', '=', $CodLanding)->get();
        
        $registros = DB::table('formularios')
                    ->where('CodLanding', $CodLanding)
                    ->select(DB::raw('count(*) as num'))
                    ->first();
        $combos = MaestroCombo::all();
        $detalles_combos = DetalleCombo::all();
        
        $pdf = PDF::loadView('reportes.reporte_inscritos', ['visitantes' => $visitantes, 'campos' => $campos, 'recolector' => $recolector, 'landing' => $landing, 'd' => $d, 'h' => $h, 'hoy' => $hoy, 'registros' => $registros, 'combos' => $combos, 'detalles_combos' => $detalles_combos]);
        return $pdf->setPaper('letter', 'portrait')->stream('visitantes.pdf');
    }

    public function landing(){
        $id_recolector= Input::get('Recolector');
        
        $landings = DB::table('landings')
                ->where('CodRecolector', '=', $id_recolector)
                ->select('*')
                ->get();
        $s = '';
        foreach($landings as $landing){
            $s .= "<option value=$landing->id>$landing->Titulo</option>";
        }
        return $s;
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
    public function create(Request $request, $id)
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
