<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ActiviteRepository;
use App\Activite;
use App\Horaire;
use App\User_activite;
use App\Http\Requests\activiteRequest;
use Illuminate\Support\Facades\Auth;


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
        $activitys = Activite::all();
        return view('activites', ['activitys' => $activitys]);
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


    public function getActivity($id)
    {
        $activity = Activite::find($id);
        $horaires = Horaire::where('id_activite', '=', $id)->first();
        return view('activite', ['activity' => $activity], ['horaires' => $horaires]);
    }


    public function destroy($id)
    {
        $this->activiteRepository->destroy($id);

        return back();
    }

    public function participer($id)
    {
        $participation = new User_activite();
        $participation->id_user = auth::user()->id;
        $participation->id_activite = $id;
        $participation->save();

        return redirect()->route('activity.show', ['id'=>$id]);
    }

    public function unparticiper($id)
    {
        User_activite::where('id_activite', '=', $id)->where('id_user', '=', auth::user()->id)->delete();
        return redirect()->route('activity.show', ['id'=>$id]);
    }
}
