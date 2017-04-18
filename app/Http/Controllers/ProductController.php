<?php

namespace App\Http\Controllers;


use App\Product;
use App\Repositories\ProductRepository;

use App\Http\Requests\productRequest;


class ProductController extends Controller {


    protected $productRepository;
    protected $nbrPerPage = 4;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $products = $this->productRepositoryr->getPaginate($this->nbrPerPage);
        $links = $products->render();

        return view('index', compact('products', 'links'));
    }


    public function store( Product $product, productRequest $request)
    {
        $product->title = $request['nom'];
        $product->description = $request['description'];
        $product->price = $request['prix'];

        $image = $request->file('photo');
        if($image->isValid()){
            $chemin =config('images.path');
            $extension = $image->getClientOriginalExtension();

            $nom = str_random(10).'.'.$extension;
            if($image->move($chemin, $nom)){
                $destination = '../../webProject/public/'.$chemin.'/'.$nom;
                $product->imagePath = $destination;
            }
        }
        $product->save();

        return redirect('home');
    }

    public function show($id)
    {
        $product = $this->productRepository->getById($id);

        return view('show',  compact('product'));
    }


    public function destroy($id)
    {
        $this->productRepository->destroy($id);

        return back();
    }
}

?>