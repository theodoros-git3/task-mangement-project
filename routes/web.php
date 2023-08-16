<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TacheController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/ajouterTache', [TacheController::class, 'ajouterTache']);

Route::post('/ajouter/traitement',[Tachecontroller::class, 'ajouterTache_traitement']);

Route::get('/deleteTache{id}', [TacheController::class, 'deleteTache']);

Route::get('/updateTache{id}',[TacheController::class, 'updateTache']);

Route::post('/update/traitement',[Tachecontroller::class, 'update_Tache_traitement']);
