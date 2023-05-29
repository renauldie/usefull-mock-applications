<?php

use App\Http\Controllers\MootaClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Accunt Nuber Sync
Route::group(['prefix' => 'v2/bank/'], function () {
    route::get('/available', [MootaClientController::class, 'getbanklist']);
    Route::post('/store', [MootaClientController::class, 'index']);
    Route::post('/update/{bank_id}', [MootaClientController::class, 'updatebank']);
    Route::post('/{bank_id}/destroy', [MootaClientController::class, 'deletebank']);

    // https://app.moota.co/api/v2/bank/update/bank_id
    // https://app.moota.co/api/v2/bank&?page=1&per_page=10
});

// Mutation
Route::group(['prefix' => 'v2/mutation/'], function () {
    Route::get('/', [MootaClientController::class, 'getmutation']);

    // https://app.moota.co/api/v2/bank/update/bank_id
    // https://app.moota.co/api/v2/bank&?page=1&per_page=10
});
