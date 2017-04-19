<?php 

namespace App\Http\Controllers;

use App\Activite;
use App\Horaire;
use App\User_activite;
use Illuminate\Http\Request;

class ActivitesController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $activitys = Activite::all();
      return view('activites', ['activitys' => $activitys]);
  }

    public function getActivity($id)
    {
        $activity = Activite::find($id);
        $horaires = Horaire::where('id_activite', '=', $id)->first();
        return view('activite', ['activity' => $activity], ['horaires' => $horaires]);
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
    public function store()
    {

    }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
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