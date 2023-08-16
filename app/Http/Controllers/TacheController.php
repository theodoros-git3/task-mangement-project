<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;


class TacheController extends Controller
{
    //

    public function ajouterTache()
    {
        return view ('layouts.ajouterTache');
    }

    public function ajouterTache_traitement(Request $request)
    {
        /*
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'statut' => 'required',
        ]);
*/
        $tache = new Tache();


        $tache -> title = $request -> title;
        $tache -> description = $request -> description;
        $tache -> statut = $request -> statut;

        $tache-> save();

        return redirect('/ajouterTache')->with('status', 'Tache a été bien ajouté'); 
    }

    public function updateTache($id)
    {
        $tache = Tache::find($id); 

        return view ('layouts.update', compact('tache'));
    }

    public function update_Tache_traitement(Request $request)
    {
        $tache = Tache::find($request->id);

        $tache->title = $request->title;
        $tache -> description = $request -> description;
        $tache -> statut = $request -> statut;


        $tache-> update();

        return redirect('/dashboard')->with('status', 'Tache a été bien modifié'); 
    }

    public function deleteTache($id)
    {
        $tache = Tache::find($id);
        $tache-> delete();

        return redirect('/dashboard')->with('status', 'Tache a été bien supprimé '); 

    }
}
