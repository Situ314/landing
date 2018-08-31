<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;
use Illuminate\Support\Facades\Input;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $CodLanding = Input::get('CodLanding');
        $NombreCampo = Input::get('NombreCampo');
        $Obligatorio = Input::get('Obligatorio');
        $CodTipo = Input::get('CodTipo');
        $Combo = Input::get('Combo');
        //1 para servicios, 0 para ciudades
        $formulario = new Formulario;
        $formulario->CodLanding = $CodLanding;
        $formulario->NombreCampo = $NombreCampo;
        $formulario->Obligatorio = $Obligatorio;
        $formulario->CodTipo = $CodTipo;
        if($CodTipo == '4'){
            $formulario->CodCombo = $Combo;
        }
        $formulario->save();
        
         return redirect()->route('detalle', $CodLanding); 
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
        $campo = Formulario::findOrFail($id);   
        $CodLanding = $campo->CodLanding;
        $campo->delete();    
        return redirect()->route('detalle', $CodLanding); 
    }
}
