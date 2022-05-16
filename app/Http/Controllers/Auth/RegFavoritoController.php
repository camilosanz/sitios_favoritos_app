<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Favorito;
use Illuminate\Foundation\Auth\RegistersFavoritos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegFavoritoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new favoritos as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersFavoritos;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'url' => ['required', 'string', 'max:255'],
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'min:8'],
            'categorias' => ['json', 'min:8'],
            'visibilidad' => ['required', 'json', 'min:8']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Favorito
     */
    protected function create(array $data)
    {
        return Favorito::create([
            'url' => $data['url'],
            'titulo' => $data['titulo'],
            'descripcion' => $data['descripcion'],
            'categorias' => $data['categorias'],
            'visibilidad' => $data['visibilidad'],
        ]);
    }
}