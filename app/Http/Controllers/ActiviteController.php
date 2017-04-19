<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    protected $activiteRepository;
    protected $nbrPerPage = 4;


    public function __construct(ActiviteRepository $activiteRepository)
    {
        $this->activiteRepository = $activiteRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        return view('activites', compact('activites', 'links'));
    }


    public function store( Activite $activite, activiteRequest $request)
    {
        $activite->nom = $request['activite'];
        $activite->description = $request['description'];
        $activite->date_debut = $request['date_debut'];
        $activite->date_fin = $request['date_fin'];
        $activite->lieu = $request['lieu'];
        $activite->id_statut = 1;

        $image = $request->file('photo');
        if($image->isValid()){
            $chemin =config('images.path');
            $extension = $image->getClientOriginalExtension();

            $nom = str_random(10).'.'.$extension;
            if($image->move($chemin, $nom)){
                $destination = '/../webProject/public/'.$chemin.'/'.$nom;
                $activite->photo = $destination;
            }
        }
        $activite->save();

        return redirect('home');
    }

    public function stores( Activite $activite, activiteRequest $request)
    {
        $activite->nom = $request['activite'];
        $activite->description = $request['description'];
        $activite->date_debut = $request['date_debut'];
        $activite->date_fin = $request['date_fin'];
        $activite->lieu = $request['lieu'];
        $activite->id_statut = 2;

        $image = $request->file('photo');
        if($image->isValid()){
            $chemin =config('images.path');
            $extension = $image->getClientOriginalExtension();

            $nom = str_random(10).'.'.$extension;
            if($image->move($chemin, $nom)){
                $destination = '/../webProject/public/'.$chemin.'/'.$nom;
                $activite->photo = $destination;
            }
        }
        $activite->save();

        return redirect('home');
    }


    public function show($id)
    {
        $activite = $this->activiteRepository->getById($id);

        return view('show',  compact('user'));
    }


    public function destroy($id)
    {
        $this->activiteRepository->destroy($id);

        return back();
    }
}
