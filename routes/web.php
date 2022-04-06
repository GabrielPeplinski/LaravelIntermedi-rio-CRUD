<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);

Route::get('create', [EventController::class, 'create']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/list', [EventController::class, 'list']);

Route::get('/show/{id}', [EventController::class, 'show']);

Route::delete('/show/{id}', [EventController::class, 'destroy']);

Route::get('/edit/{id}', [EventController::class, 'edit']);

Route::put('/update/{event}', [EventController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
