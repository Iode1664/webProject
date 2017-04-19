<?php

namespace App\Http\Controllers;


use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Session;
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
                $destination = '/../webProject/public/'.$chemin.'/'.$nom;
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



    public function getIndex(){

        $products =Product::all();
        return view('shop.boutique',['products'=>$products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('product.index');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }


    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


}

