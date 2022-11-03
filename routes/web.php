<?php

use App\Http\Controllers\Web\Inicio\InicioController;
use App\Http\Controllers\Web\Programas\WebProgramasController;
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

Route::get('/',function(){
    return redirect()->to('/web');
});
Route::get('/web',[InicioController::class, 'index'])->name('web-space');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Url para ver un programa
Route::get('/web/programas-academicos/{programa}',[WebProgramasController::class, 'getPrograma'])->name('show-programa');
