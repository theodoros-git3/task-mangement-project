<?php

use Illuminate\Support\Facades\Route;

use app\http\Controller\TacheController;

use Illuminate\Http\Request;

use app\Models\Tachee;


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

Route::get('/Tache',[TacheController::class,'listeTache']);

Route::get('/master',function () {
    return view ('master');
});


Route::get('/login',function () {
    return view ('partials.login');
});


/* chemin vers l'ajout de tâche*/

Route::get('/ajouterTache',function () {
    return view ('layouts.ajouterTache');
});

/*traiter de la donnée ajoutée*/

Route::post('/ajouter/traitement',function ( Request $request) {

    $request ->validate([

        'titre'=> 'required',
        'description'=> 'required',
        'statut'=> 'required',
    ]);

    $tachee = new Tachee();

    $tachee -> titre = $request-> titre;
    $tachee -> description = $request -> description;
    $tachee -> statut = $request-> statut;

    $tachee -> save();

    return redirect('master')-> with('status', 'Tâche bien ajoutée dans la base');

});


Route::get('/mettreajour',function () {
    return view ('layouts.mettreajour');
});


Route::get('/supprimer une tache',function () {
    return view ('layouts.supprimer une tache');
});