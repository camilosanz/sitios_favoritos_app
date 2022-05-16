<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;

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
        $favoritos = Favorito::paginate();

        return view('home', compact('favoritos'))
            ->with('i', (request()->input('page', 1) - 1) * $favoritos->perPage());
    }
}
