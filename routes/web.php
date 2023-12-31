<?php

use App\Http\Controllers\StocksController;
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
Route::get('/', function () {
    return view('stocks\add');
});

Route::controller(StocksController::class)->group(function () {
    Route::get('/stocks', 'index')->name('stocks.index');
    Route::get('/stocks/add', 'add')->name('stocks.add');
    Route::post('/stocks/store', 'store')->name('stocks.store');
    Route::put('/stocks/store', 'store')->name('stocks.store');
    Route::delete('/stocks/destroy/{stock}', 'destroy')->name('stocks.destroy');
});
