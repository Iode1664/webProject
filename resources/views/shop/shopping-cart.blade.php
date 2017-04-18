@extends('Boutique-template')

@section('title')
    Boutique
@endsection

@section('custom_css')

    <link rel="stylesheet" href="/../webProject/public/css/style-boutique.css">
@endsection

@section('contenu')
    @if(Session::has('cart'))
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($products as $product)
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <img class="media-object thumbnail pull-left" src="{{ $product['item']['imagePath'] }}" style="width: 10rem; height: 9rem;">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{ $product['item']['title'] }}</a></h4>
                                </div>
                            </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $product['qty'] }}">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Réduire de 1</a></li>
                                    <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Supprimer</a></li>
                                </ul>
                            </div>

                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong> {{ $product['item']['price'] }} € </strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{ $product['price'] }}  €</strong></td>

                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        @endforeach

                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong> {{$totalPrice}} €</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a href="{{route('product.index')}}">
                                <button type="button" class="btn btn-default" >
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Continuer vos achats
                                </button>
                             </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">
                                Règlement <span class="glyphicon glyphicon-play"></span>
                            </button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>Le panier est vide</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">

                    <a href="{{route('product.index')}}">
                        <button type="button" class="btn btn-default" >
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuer vos achats
                        </button>
                    </a>
            </div>
        </div>
        <br>
        <br>

    @endif





@endsection

