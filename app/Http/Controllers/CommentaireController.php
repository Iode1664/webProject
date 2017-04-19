<?php 

namespace App\Http\Controllers;

use App\Commentaire;
use App\Photo;

class CommentaireController extends Controller {



    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index($id)
  {

      $photo = Photo::find($id);
      return view('commentaires', ['photo' => $photo]);
  }



  public function store(Commentaire $commentaire, commentaireRequest $request, $idp)
  {
        $commentaire->texte = $request['description'];
        $commentaire->id_user = Auth::User()->id;
        $commentaire->id_photo = $idp;
        $commentaire->save();
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