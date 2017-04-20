<?php 

namespace App\Http\Controllers;

use App\Http\Requests\photoRequest;
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
        return redirect('home');
    }


    public function show($id)
    {


    }


    public function edit($id)
    {

    }


    public function update($id)
    {

    }
}

?>

