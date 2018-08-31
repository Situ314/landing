<?php
Route::post('guardar', 'VisitanteController@store')->name('guardar');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('login');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('master', function () {
    return view('master');
});
//landing
Route::resource('Landing','LandingController');
Route::resource('Recolector','RecolectorController');
Route::resource('Formulario','FormularioController');
Route::resource('Combo','ComboController');
Route::resource('Reporte','ReporteController');
Route::resource('Visitante','VisitanteController');
Route::resource('CambioContrasenia','CambioContraseniaController');

Route::get('/contadores', 'ReporteController@index2');
Route::get('detalle/{id}', function($id){
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    return view('landing.detalle_landing', compact('id' ,'campos', 'tipos', 'combos'));
})->name('detalle');
Route::get('nuevoCampo', 'FormularioController@store')->name('nuevoCampo');

Route::get('plantilla1/{id}', function ($id) {
    $landing = \App\Landing::findOrFail($id);
    $nombre_com = \Illuminate\Support\Facades\DB::table('recolectores')->where('id', '=', $landing->CodRecolector)->select('*')->first();
    $nombre = str_replace(" ", "-", $nombre_com->Nombre);
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('plantillas.plantilla1', compact('id', 'landing', 'nombre', 'campos', 'combos', 'tipos', 'detalle_combos'));
})->name('plantilla1');
Route::get('plantilla2/{id}', function ($id) {
    $landing = \App\Landing::findOrFail($id);
    $nombre_com = \Illuminate\Support\Facades\DB::table('recolectores')->where('id', '=', $landing->CodRecolector)->select('*')->first();
    $nombre = str_replace(" ", "-", $nombre_com->Nombre);
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('plantillas.plantilla2', compact('id', 'landing', 'nombre', 'campos', 'combos', 'tipos', 'detalle_combos'));
})->name('plantilla2');
Route::get('plantilla3/{id}', function ($id) {
    $landing = \App\Landing::findOrFail($id);
    $nombre_com = \Illuminate\Support\Facades\DB::table('recolectores')->where('id', '=', $landing->CodRecolector)->select('*')->first();
    $nombre = str_replace(" ", "-", $nombre_com->Nombre);
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('plantillas.plantilla3', compact('id', 'landing', 'nombre', 'campos', 'combos', 'tipos', 'detalle_combos'));
})->name('plantilla3');
Route::get('plantilla4/{id}', function ($id) {
    $landing = \App\Landing::findOrFail($id);
    $nombre_com = \Illuminate\Support\Facades\DB::table('recolectores')->where('id', '=', $landing->CodRecolector)->select('*')->first();
    $nombre = str_replace(" ", "-", $nombre_com->Nombre);
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('plantillas.plantilla4', compact('id', 'landing', 'nombre', 'campos', 'combos', 'tipos', 'detalle_combos'));
})->name('plantilla4');
Route::get('plantilla', 'LandingController@plantilla')->name('plantilla');

Route::get('formulario/{id}', function($id){
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('landing.formulario', compact('id' ,'campos', 'tipos', 'combos', 'detalle_combos'));
})->name('formulario');
//modal formulario
Route::get('ver_modal/{id}', function ($id) {
    $campos = \Illuminate\Support\Facades\DB::table('formularios')->where('CodLanding', $id)->paginate(9);
    $combos = App\MaestroCombo::all();
    $tipos = App\Tipo::all();
    $detalle_combos = \App\DetalleCombo::all();
    return view('landing.formulario', compact('id' ,'campos', 'tipos', 'combos', 'detalle_combos'));
})->name('ver_modal');

//ruta para landing por recolector en Reportes
Route::get('land/{id_recolector}', 'ReporteController@landing');
Route::post('reporte_leads', 'ReporteController@update')->name('reporte_leads');

