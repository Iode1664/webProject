<?php

namespace App\Http\Controllers;

use App\Http\Requests\membreRequest;
use App\User;


class MembreController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ajout');
    }



    protected function create(membreRequest $request, User $user)
    {
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->promo = $request->input('promo');
        $user->password = bcrypt($request->input('password'));
        $user->id_statut = 2;
        $user->avatar = $request->input('avatar');
        $user->save();

        return view('home');
    }
}

