<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>


    @if(auth::User()->promo === 'Exia')
        <link rel="stylesheet" href="/../webProject/public/css/style-Exia.css">
    @else
        <link rel="stylesheet" href="/../webProject/public/css/style-Ei.css">
@endif
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<<<<<<< HEAD

    <link rel="stylesheet" href="/../webProject/public/css/style-boutique.css">

=======
    @yield('custom_css')
>>>>>>> e0e4fad023c09c8309bc348a6a848b91ca547d13

</head>
<body>
{{--Header--}}
<header>
    <div class="container-fluid">
        <div id="top" class="row">
            <div id="caret" class="col-md-offset-10">

                <li class="dropdown">
                    @if(auth::User()->promo === 'Exia')
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ Auth::user()->avatar }}" height="50">
                            {{ Auth::user()->prenom }} <span class="caret"></span>
                        </button>
                    @else
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ Auth::user()->avatar }}" height="50">
                            {{ Auth::user()->prenom }} <span class="caret"></span>
                        </button>
                    @endif

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Se deconnecter
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </div>

        <div id="contain" class="row">
            <div id="logoCesi" class="col-md-1">

                @if(auth::User()->promo === 'Exia')
                    <img src="../../webProject/public/images/logoExia.jpg">
                @else
                    <img src="../../webProject/public/images/logoEi.jpg">
                @endif
            </div>

            <div id="logoBDE" class="col-md-3">
                <img src="/../webProject/public/images/logoBDE.png">
            </div>



            <a href="{{ url('/home') }}">
                <div id="home" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/home.png">
                    </div>
                    <div class="titre">
                        <p>ACCEUIL</p>
                    </div>
                </div></a>

            <a href="{{ url('/activites') }}">
                <div id="activity" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/activity.png">
                    </div>
                    <div class="titre">
                        <p>ACTIVITÉS</p>
                    </div>
                </div></a>

            <a href="{{route('product.index')}}">
                <div id="shop" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/cadi.png">
                    </div>
                    <div class="titre">
                        <p>BOUTIQUE</p>
                    </div>
                </div></a>

            <div id="cart" class="col-md-1">
                <a href="{{route('product.shoppingCart')}}">
                    <div class="logo">
                        <img src="/../webProject/public/images/panier.png">
                    </div>
                    <div class="titre">
                        <p>PANIER <span
                                    class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>


{{--Contenu du site--}}
<div id="contenu">
    @yield('contenu')
</div>


{{--Footer--}}
<footer>

    <div class="container-fluid">
        <div class="row" id="foot">
            <div id="copyright" class="col-md-2">
                <p>@2017 BDECesi 2017</p>
            </div>
            <div id="contact" class="col-md-6">
                <p>60 rue de Maurian <br>
                    33295 Blanquefort, France<br>
                    presidentBDE@viacesi.fr<br>
                    +33 5 56 95 50 50</p>
            </div>

            <div id="facebook" class="col-md-1">
                <a><img src="/../webProject/public/images/Facebook.png"></a>
            </div>

            <div id="twitter" class="col-md-1">
                <a><img src="/../webProject/public/images/Twitter.png"></a>
            </div>

            <div id="mention" class="col-md-2">
                <p><a href="">/Mention légales</a></p>
            </div>
        </div>
    </div>

</footer>

</body>
</html>