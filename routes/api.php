<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Http\Controllers\TestamentoController;

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
Route::get('testamento/{id}', [TestamentoController::class, 'show']);
Route::get('testamento', [TestamentoController::class, 'index']);
Route::post('testamento',  [TestamentoController::class, 'store']);
Route::put('testamento/{id}',  [TestamentoController::class, 'update']);
Route::delete('testamento/{id}', [TestamentoController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
