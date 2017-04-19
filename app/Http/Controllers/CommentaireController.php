<?php 

namespace App\Http\Controllers;

use App\Commentaire;

class CommentaireController extends Controller {



    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
      return view('commentaires');
  }



  public function store(Commentaire $commentaire, commentaireRequest $request, $idp)
  {

        $commentaire->texte = $request['description'];
        $commentaire->id_user = auth::User()->id;
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