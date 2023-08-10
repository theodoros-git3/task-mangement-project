<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tachecontroller extends Controller
{
    
    public function listeTache()
    {
        return view('Tache.liste');
    }

    public function login()
    {
        return viex ('partials.login')
    }
    
}
