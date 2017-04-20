<?php 

namespace App\Http\Controllers;

use App\Commentaire;
use App\Http\Requests\commentaireRequest;
use App\Photo;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CommentaireController extends Controller {



    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index($id)
  {
      $photo = Photo::find($id);
      $comments = DB::table('commentaires')->join('users', 'commentaires.id_user', '=','users.id')->select('commentaires.id','commentaires.texte', 'commentaires.id_photo','users.nom','users.prenom', 'users.avatar')->where('id_photo', '=', $id)->get();
      return view('commentaires', ['photo' => $photo])->with('comments',$comments);
  }



  public function store(Commentaire $commentaire, commentaireRequest $request, $id)
  {
        $commentaire->texte = $request['description'];
        $commentaire->id_user = auth::User()->id;
        $commentaire->id_photo = $id;
        $commentaire->save();


      return redirect()->route('commentaire.index', ['id' => $id]);
  }



  public function destroy($id)
  {
      $photo = Commentaire::find($id);
      Commentaire::where('id', '=', $id)->delete();
      $idf = $photo->id_photo;
      return redirect()->route('commentaire.index', ['id'=>$idf]);
  }
  
}

?>