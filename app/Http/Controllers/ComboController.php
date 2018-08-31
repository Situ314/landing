<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MaestroCombo;
use App\DetalleCombo;
use Illuminate\Support\Facades\DB;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combos = MaestroCombo::orderBy('id')->paginate(10);
        return view('combos.lista_combos', compact('combos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('combos.crear_combo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maestro_combo = new MaestroCombo;
        $maestro_combo->Nombre = $request->Nombre;
        $maestro_combo->save();
        
        $id = DB::getPdo()->lastInsertId();
        $num = $request->elementos;
        for($i=1; $i<=$num; $i++){
            $detalle_combo = new DetalleCombo;
            $detalle_combo->CodCombo = $id;
            $detalle_combo->Nombre = $request->input("opcion".$i);
            $detalle_combo->save();
        }
        
        return redirect('Combo');
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
        $maestro_combo = MaestroCombo::findOrFail($id); 
        
        $detalles_combo = DB::table('detalle_combos')
                ->where('CodCombo', '=', $id)
                ->select('*')
                ->get();
        
         return view('combos.editar_combo', compact('maestro_combo', 'detalles_combo'));
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
        $maestro_combo = MaestroCombo::findOrFail($id);
        $maestro_combo->Nombre = $request->Nombre;
        $maestro_combo->update();
        
        $detalle_combos = DB::table('detalle_combos')
                ->where('CodCombo', '=', $id)
                ->select('*')
                ->get();
        foreach($detalle_combos as $detalle_combo){
            $combo = DetalleCombo::findOrFail($detalle_combo->id);
            $combo->delete();
        }
        
        $num = $request->elementos;
        for($i=1; $i<=$num; $i++){
            $detalle_combo = new DetalleCombo;
            $detalle_combo->CodCombo = $id;
            $detalle_combo->Nombre = $request->input("opcion".$i);
            $detalle_combo->save();
        }
        
        return redirect('Combo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maestro_combo = MaestroCombo::findOrFail($id);                    
        
        $detalle_combos = DB::table('detalle_combos')
                ->where('CodCombo', '=', $id)
                ->select('*')
                ->get();
        foreach($detalle_combos as $detalle_combo){
            $combo = DetalleCombo::findOrFail($detalle_combo->id);
            $combo->delete();
        }
        
        $maestro_combo->delete();
        
        return redirect('Combo');
    }
}
