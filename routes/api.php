<?php

use App\Http\Controllers\API\EmployController;
use App\Http\Controllers\API\EquimentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/employs',[EmployController::class,'index']);//mostrar todos los registros de  employs
Route::post('/employs',[EmployController::class,'store']);//crear todos los registros de  employs
Route::put('/employs/{id}',[EmployController::class,'update']);//actualizar un registro de employ
Route::delete('/employs/{id}',[EmployController::class,'destroy']);//eliminar un registro de employ
Route::get('/equiments',[EquimentController::class,'index']);//mostrar todos los registros de  equiments
Route::post('/equiments',[EquimentController::class,'store']);//crear todos los registros de  equiments
Route::put('/equiments/{id}',[EquimentController::class,'update']);//actualizar un registro de equiment
Route::delete('/equiments/{id}',[EquimentController::class,'destroy']);//eliminar un registro de equiment