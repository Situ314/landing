<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recolector;
use Illuminate\Http\File;

class RecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectores = Recolector::orderBy('id')->paginate(10);
        return view('recolectores.lista_recolectores', compact('recolectores'));
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
        $recolector = new Recolector;
        $recolector->Nombre = $request->Nombre;
        $recolector->save();
        
        $nombre = str_replace(" ", "-", $request->Nombre);
        $path = public_path().'/landings/'.$nombre;
		mkdir($path, 0777, true);
        
        return redirect('Recolector');
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
        $recolector = Recolector::findOrFail($id); 
        $recolector->Nombre = $request->nuevo;
        $recolector->update();  
        
        return redirect('Recolector');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recolector = Recolector::findOrFail($id);     
        
        $path = public_path().'/landings/'.$recolector->Nombre;
		rmdir($path);
        
        $recolector->delete();    
        return redirect('Recolector');
    }
}
