<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use Illuminate\Support\Facades\Route;

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
/*
// PASO 1
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO GET
Route::get('/', function () {
    return View('welcome');
});
// ROUTE PARA PRESENTAR UN TEXTO UTILIZANDO EL MÉTODO GET
Route::get('demo1', function () {
    return 'Hola Laravel';
});
// ROUTE PARA PRESENTAR UN JSON UTILIZANDO EL MÉTODO GET
Route::get('demo2', function () {
    return '{
    "Nombre":"Alexander",
    "Apellido":"Tupiza",
    "Ciudad":"Quito"
    }';
});
*/
/*
// PASO 2
// PROBLEMA DE LAS RUTAS SIN EL MÉTODO NAME
Route::get('servicios',function(){
    return'
        <a href="servicios">servicios</a>
        <br>
        <a href="servicios">servicios</a>
        <br>
        <a href="servicios">servicios</a>
        <br>
        <a href="servicios">servicios</a>
    ';
});
*/
/*
// PASO 3
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::get('/', function () {
    return View('home');
})->name('home');
*/
/*
// PASO 4
// ROUTE PARA MANDAR DATOS A LA VISTA
Route::get('modelos',function()
{
    // ES VÁLIDO PERO SE DEBE RECORDAR QUE PARA TRAER DATOS O PROCESAR
    // PETICIONES DE LA BDD SE UTILIZA UN CONTROLADOR
    $autos =
    [
        "CHEVROLET"=>'TRACKER',
        "MAZDA"=>'323',
        "FORD"=>'RANGER',
        "KIA"=>'SPORTAGE',
        "GREAT WALL"=>'WINGLE'
    ];
    $nombre = "Alexander";
    return view('modelos',compact('autos','nombre'));
})->name('models');
*/
// PASO 5
Route::get('/', function () {
    return View('home');
})->name('home');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('nosotros','nosotros')->name('about');
// ROUTE PARA PRESENTAR UNA VISTA UTILIZANDO EL MÉTODO VIEW Y EL MÉTODO NAME
Route::view('personal','personal')->name('personal');
/*Route::get('modelos',function()
{
    $autos =
    [
        "CHEVROLET"=>'TRACKER',
        "MAZDA"=>'323',
        "FORD"=>'RANGER',
        "KIA"=>'SPORTAGE',
        "GREAT WALL"=>'WINGLE'
    ];
    $nombre = "Alexander";
    return view('modelos',compact('autos','nombre'));
})->name('models');*/
Route::get('modelos',ModeloController::class)->name('models');




// PASAR PARAMETROS A LA ROUTE

Route::get('contactos/{name?}',[ContactoController::class,'dataContact'])->name('contact');
/*Route::get('contactos/{name?}',function($name='Invitado')
{
    return view('contactos',compact('name'));
})->name('contact');*/

Route::resource('autos',AutoController::class)->except('index');

Route::get('autos','App\Http\Controllers\AutoController@index')->name('indexauto');

Route::view('trabajos','trabajos')->name('jobs');