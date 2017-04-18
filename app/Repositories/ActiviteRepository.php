<?php


namespace App\Repositories;

use App\Activite;



class ActiviteRepository  {

  protected $activite;

  public function _construct(Activite $activite){
      $this->activite = $activite;

  }


    public function getPaginate($n)
    {
        return $this->activite->paginate($n);
    }



    public function getById($id)
    {
        return $this->activite->findOrFail($id);
    }


    public function destroy($id)
    {
        $this->getById($id)->delete();
    }
}