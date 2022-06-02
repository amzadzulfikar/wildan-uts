<?php

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
Route::get('https://imdb-api.com/en/API',[\App\Http\Controllers\WrapperController::class,'boxofficealltime'])->name('boxofficealltime')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('boxofficealltime');
Route::get('https://imdb-api.com/en/API',[\App\Http\Controllers\WrapperController::class,'userrating'])->name('userrating')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('userrating');
Route::get('https://imdb-api.com/en/API',[\App\Http\Controllers\WrapperController::class,'mostpopuler'])->name('mostpopuler')
    ->middleware(\App\Http\middleware\Npmmiddleware::class)
    ->name('mostpopuler');
Route::get('/user/identitas', function (){
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006079',
            'nama' => 'Wildan Kautsar',
            'email' => '197006079@student.unsil.ac.id'
        ]
        ];
})
->middleware(\App\Http\middleware\Npmmiddleware::class)
->name('identitas');

