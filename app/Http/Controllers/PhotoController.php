<?php 

namespace App\Http\Controllers;

use App\Commentaire;
use App\Http\Requests\photoRequest;
use App\Jaime;
use App\Photo;

class PhotoController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

    }


    public function create()
    {

    }


    public function store(Photo $photo, photoRequest $request, $id)
    {
        $photo->id_activite = $id;
        $image = $request->file('photo');
        if ($image->isValid()) {
            $chemin = config('images.path');
            $extension = $image->getClientOriginalExtension();

            $nom = str_random(10) . '.' . $extension;
            if ($image->move($chemin, $nom)) {
                $destination = '/../webProject/public/' . $chemin . '/' . $nom;
                $photo->pathPhoto = $destination;
            }
        }
        $photo->save();
        $idd = $photo->id_activite;
        return redirect()->route('activity.gallery', ['id'=>$idd]);
    }


    public function destroy($id)
    {
        $activite = Photo::find($id);
        Commentaire::where('id_photo', '=', $id)->delete();
        Jaime::where('id_photo', '=', $id)->delete();
        Photo::where('id', '=', $id)->delete();
        $idaa = $activite->id_activite;

        return redirect()->route('activity.gallery', ['id'=>$idaa]);
    }



}

?>

