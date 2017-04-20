<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    @if(auth::User()->promo === 'Exia')
        <link rel="stylesheet" href="/../webProject/public/css/style-Exia.css">
        <link rel="shortcut icon" type="image/x-icon" href="/../webProject/public/images/logo-exia-onglet.ico" />
    @else
        <link rel="stylesheet" href="/../webProject/public/css/style-Ei.css">
        <link rel="shortcut icon" type="image/x-icon" href="/../webProject/public/images/logo-ei-onglet.ico" />

    @endif
    @yield('custom_css')

</head>
<body>
<wrapper>
{{--Header-classique--}}
<header>
    <div class="container-fluid">
        <div id="top" class="row">
            <div id="caret" class="col-md-offset-10">
                <li class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ Auth::user()->avatar }}" height="50">
                            {{ Auth::user()->prenom }} <span class="caret"></span>
                        </button>

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
                    <img src="/../webProject/public/images/logoExia.jpg">
                @else
                    <img src="/../webProject/public/images/logoEi.JPG">
                @endif
            </div>

            <div id="logoBDE" class="col-md-2">
                <img src="/../webProject/public/images/logoBDE.png">
            </div>

            @if(auth::User()->id_statut == 2 || 3)
                <a href="{{ url('/ajout') }}">
                    <div id="plus" class="col-md-1 ">
                        <img src="/../webProject/public/images/plus.png">
                    </div>
                </a>
            @endif

            <a href="{{ url('/home') }}">
                <div id="home" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/home.png">
                    </div>
                    <div class="titre">
                        <p>ACCUEIL</p>
                    </div>
                </div>
            </a>

            <a href="{{ url('/activites') }}">
                <div id="activity" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/activity.png">
                    </div>
                    <div class="titre">
                        <p>ACTIVITÉS</p>
                    </div>
                </div>
            </a>

            <a href="{{route('product.index')}}">
                <div id="shop" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/cadi.png">
                    </div>
                    <div class="titre">
                        <p>BOUTIQUE</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</header>

{{--Contenu du site--}}
<div id="contenu">
    @yield('contenu')

    @yield('javascript')
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
                <a href="{{ url('https://www.facebook.com/bde.cesibordeaux.9?fref=ts') }}"><img
                            src="/../webProject/public/images/Facebook.png"></a>
            </div>

            <div id="twitter" class="col-md-1">
                <a href="{{ url('https://twitter.com/bdecesibordeaux') }}"><img
                            src="/../webProject/public/images/Twitter.png"></a>
            </div>

            <div id="mention" class="col-md-2">
                <p><strong><a href="">/Mention légales</a></strong></p>
            </div>
        </div>
    </div>
</footer>
<<<<<<< Updated upstream
=======
@yield('javascript')
</wrapper>
>>>>>>> Stashed changes
</body>
</html>