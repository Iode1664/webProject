<?php


namespace App\Repositories;

use App\Product;



class ProductRepository  {

  protected $product;

  public function _construct(Product $product){
      $this->product = $product;
  }


    public function getPaginate($n)
    {
        return $this->product->paginate($n);
    }



    public function getById($id)
    {
        return $this->product->findOrFail($id);
    }


    public function destroy($id)
    {
        $this->getById($id)->delete();
    }
}