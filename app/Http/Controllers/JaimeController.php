<?php 

namespace App\Http\Controllers;

use App\Jaime;
use auth;
use App\Photo;
use Illuminate\Support\Facades\DB;


class JaimeController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Jaime $jaime, $id)
  {
          $jaime->id_user = auth::User()->id;
          $jaime->id_photo = $id;
          $jaime->save();

      return redirect()->route('commentaire.index', ['id'=>$id]);
  }

    public function unstore($id)
    {
        Jaime::where('id_photo', '=', $id)->where('id_user', '=', auth::User()->id)->delete();

        return redirect()->route('commentaire.index', ['id'=>$id]);
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