<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/testamentos', function(){
    $json = array("Livros" =>
     array("Velho testamento",   "Novo testamento")
    );
         return response()->json($json);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
