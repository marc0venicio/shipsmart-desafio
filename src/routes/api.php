<?php

use App\Http\Controllers\AddressController;
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
Route::get('/address', [AddressController::class, 'index']);

Route::post('/address', [AddressController::class, 'store']);

Route::put('/address/{address}', [AddressController::class, 'update']);

Route::delete('/address/{address}', [AddressController::class, 'delete']);

Route::get('/buscacep/{cep}', [AddressController::class, 'buscaCep']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
