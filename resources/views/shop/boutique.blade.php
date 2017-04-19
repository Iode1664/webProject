@extends('Boutique-template')

@section('title')
    Boutique
@endsection

@section('contenu')

    @foreach($products->chunk(3) as $productChunck)
        <br><br>
        <div class="row">
            <div class="line">
                @foreach($productChunck as $product)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{$product->imagePath}}" alt="...">
                            <div class="caption">
                                <h3>{{$product->title}}</h3>
                                <p>{{$product->description}}</p>
                                <br>
                                <div class="clearfix">
                                    <div class="pull-left" id="price">{{$product->price}} €</div>
                                    <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn btn-primary pull-right" role="button">Ajouter au panier</a>
                                </div>
                            </div>

                        </div>

                    </div>

                @endforeach
            </div>
        </div>

    @endforeach



@endsection
