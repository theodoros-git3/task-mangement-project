<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tache = Tache::all();
        return view('dashboard', compact('tache'));
    }

    public function dashboard()
    {
        $tache = Tache::all();
        return view('dashboard', compact('tache'));
    }
}
