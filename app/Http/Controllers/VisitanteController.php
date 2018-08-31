<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitante;
use DateTime;
use Alert;
use Stevebauman\Location\Facades\Location;

class VisitanteController extends Controller
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
        $now = new DateTime();        
        $ip = getRealIP();
        $region = Location::get($ip);
        
        $visitante = new Visitante;
        $visitante->IpAdrress = $ip;
        $visitante->Region = $region->regionName;
        $visitante->CodLanding = $request->id_landing;
        $visitante->FechaHora = $now;
        $visitante->Campo1 = $request->campo1;
        $visitante->Campo2 = $request->campo2;
        $visitante->Campo3 = $request->campo3;
        $visitante->Campo4 = $request->campo4;
        $visitante->Campo5 = $request->campo5;
        $visitante->Campo6 = $request->campo6;
        $visitante->Campo7 = $request->campo7;
        $visitante->Campo8 = $request->campo8;
        $visitante->Campo9 = $request->campo9;
        $visitante->Campo10 = $request->campo10;
        $visitante->save();
        
//        Alert::success('Uno de nuestros ejecutivos de venta se pondrá en contacto contigo para empezar con la campaña gratuita.', '¡MUCHAS GRACIAS!')->persistent("Close");
        return redirect()->back();
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
