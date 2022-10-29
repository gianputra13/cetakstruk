<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebreportsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebreportsController::class, 'index']);
// Route::get('/search', [WebreportsController::class, 'search']);
Route::get('/pln', [WebreportsController::class, 'pln']);
Route::get('/plntoken', [WebreportsController::class, 'plntoken']);
Route::get('/bpjs', [WebreportsController::class, 'bpjs']);
Route::get('/tagihan', [WebreportsController::class, 'tagihan']);
Route::get('/LandscapePln', [WebreportsController::class, 'LandscapePln']);
Route::get('/LandscapePlntoken', [WebreportsController::class, 'LandscapePlntoken']);
Route::get('/LandscapeBpjs', [WebreportsController::class, 'LandscapeBpjs']);
Route::get('/LandscapeTagihan', [WebreportsController::class, 'LandscapeTagihan']);