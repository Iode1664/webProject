<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ActiviteRepository;
use App\Activite;
use App\Photo;
use auth;
use App\Vote;
use App\Horaire;
use App\Http\Requests\activiteRequest;


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
        $activitys = Activite::where('id_statut', '!=', 3)->get();
        $votes = Activite::where('id_statut', '=', 3)->get();
        return view('activites', ['activitys' => $activitys], ['votes' => $votes]);
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


    public function voteStore( Activite $activite, activiteRequest $request)
    {
        $activite->nom = $request['activite'];
        $activite->description = $request['description'];
        $activite->lieu = $request['lieu'];
        $activite->id_statut = 3;

        $activite->date_debut = $request['date_debut'];
        $activite->date_fin = $request['date_fin'];
        $activite->date_debut = $request['date_debut2'];
        $activite->date_fin = $request['date_fin2'];
        $activite->date_debut = $request['date_debut3'];
        $activite->date_fin = $request['date_fin3'];

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
        $photos = Photo::where('id_activite', '=', $id)->get();
        $Firstphoto = Photo::where('id_activite', '=', $id)->first();

        return view('activite', ['activity' => $activity], ['horaires' => $horaires])->with('photos' , $photos) -> with('Firstphoto' , $Firstphoto);


    }


    public function getGallery($id)
    {
        $activity = Activite::find($id);
        $photos = Photo::where('id_activite', '=', $id)->get();

        return view('gallery',['activity' => $activity]) ->with('photos' , $photos);
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

    public function vote(Request $request)
    {
        $participation = new Vote();
        $participation->id_user = auth::user()->id;
        $participation->id_horaire = $request['plage_horaire'];

        $participation->save();

        return $this->index();
    }

    public function unvote($id)
    {
//        Vote::select('id')->where('id_activite', "=", $id)->get())->where('id_user', '=', auth::user()->id)
        Vote::whereIn('id_horaire', Horaire::select('id')->where('id_activite', "=", $id)->get())->where('id_user', '=', auth::user()->id)->delete();
//        Vote::where('id_activite', '=', $id)->where('id_user', '=', auth::user()->id)->delete();
        return $this->index();
    }
}
