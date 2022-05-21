<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Llamar controlador
use App\Http\Controllers\Persona;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function(){
    //ruta view('principal');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personas',[Persona::class, 'index']);



?>
