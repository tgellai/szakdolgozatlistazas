<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzakdogaController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/api/szakdogak', function () {
    return view('dashboard');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/auth.php';

Route::post('/api/szakdogak', [SzakdogaController::class, 'store']);

Route::get('/api/szakdogak', [SzakdogaController::class, 'index']);

Route::delete('/api/szakdogak/{id}', [SzakdogaController::class, 'delete']);

Route::put('/api/szakdogak/{id}', [SzakdogaController::class, 'edit']);
