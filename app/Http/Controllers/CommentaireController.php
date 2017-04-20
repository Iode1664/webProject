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
      $comments = DB::table('commentaires')->join('users', 'commentaires.id_user', '=','users.id')->select('commentaires.texte', 'commentaires.id_photo','users.nom','users.prenom', 'users.avatar')->where('id_photo', '=', $id)->get();
      return view('commentaires', ['photo' => $photo])->with('comments',$comments);
  }



  public function store(Commentaire $commentaire, commentaireRequest $request, $id)
  {
        $commentaire->texte = $request['description'];
        $commentaire->id_user = auth::User()->id;
        $commentaire->id_photo = $id;
        $commentaire->save();

      $photo = Photo::find($id);
      $comments = DB::table('commentaires')->join('users', 'commentaires.id_user', '=','users.id')->select('commentaires.texte', 'commentaires.id_photo','users.nom','users.prenom', 'users.avatar')->where('id_photo', '=', $id)->get();
      return view('commentaires', ['photo' => $photo])->with('comments',$comments);
      return redirect()->route('commentaires.index');
  }



  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>