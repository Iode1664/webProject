<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
<<<<<<< HEAD

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js">    </script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">    </script>


        @if(auth::User()->promo === 'Exia')
            <link rel="stylesheet" href="../../webProject/public/css/style-Exia.css">
        @else
            <link rel="stylesheet" href="../../webProject/public/css/style-Ei.css">
        @endif

=======
    <link rel="stylesheet" href="/../webProject/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../webProject/public/css/style-Exia.css">
    @yield('custom_css')
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
</head>
<body>

{{--Header-classique--}}

        <div class="container-fluid">
            <div id="top" class="row">
                <div class="col-md-offset-10">

                    <li class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="{{ Auth::user()->avatar }}" height="50">
                            {{ Auth::user()->nom }} <span class="caret"></span>
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
<<<<<<< HEAD
                        @if(auth::User()->promo === 'Exia')
                            <img src="../../webProject/public/images/logoExia.jpg">
                        @else
                            <img src="../../webProject/public/images/logoEi.jpg">
                        @endif
                </div>
                <div id="logoBDE" class="col-md-3">
                    <img src="../../webProject/public/images/logoBDE.png">
=======
                    <img src="/../webProject/public/images/logoExia.jpg">
                </div>
                <div id="logoBDE" class="col-md-3">
                    <img src="/../webProject/public/images/logoBDE.png">
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
                </div>

                <a href="{{ url('/home') }}">
                <div id="home" class="col-md-2">
                    <div class="logo">
<<<<<<< HEAD
                        <img src="../../webProject/public/images/home.png">
=======
                        <img src="/../webProject/public/images/home.png">
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
                    </div>
                    <div class="titre">
                        <p>ACCEUIL</p>
                    </div>
                </div></a>

                <a href="{{ url('/activites') }}">
                <div id="activity" class="col-md-2">
                    <div class="logo">
<<<<<<< HEAD
                        <img src="../../webProject/public/images/activity.png">
=======
                        <img src="/../webProject/public/images/activity.png">
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
                    </div>
                    <div class="titre">
                        <p>ACTIVITÉS</p>
                    </div>
                </div></a>

                <a href="{{ url('/boutique') }}">
                <div id="shop" class="col-md-2">
                    <div class="logo">
<<<<<<< HEAD
                        <img src="../../webProject/public/images/cadi.png">
=======
                        <img src="/../webProject/public/images/cadi.png">
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
                    </div>
                    <div class="titre">
                        <p>BOUTIQUE</p>
                    </div>
                </div></a>
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
<<<<<<< HEAD
                    <a href="{{ url('https://www.facebook.com/bde.cesibordeaux.9?fref=ts') }}"><img src="../../webProject/public/images/Facebook.png"></a>
                </div>

                <div id="twitter" class="col-md-1">
                    <a href="{{ url('https://twitter.com/bdecesibordeaux') }}"><img src="../../webProject/public/images/Twitter.png"></a>
=======
                    <img src="/../webProject/public/images/Facebook.png">
                </div>

                <div id="twitter" class="col-md-1">
                    <img src="/../webProject/public/images/Twitter.png">
>>>>>>> 53380f02e1f0b207ba271bc8c5ee7aa96a57c0e4
                </div>

                <div id="mention" class="col-md-2">
                    <p><strong><a href="">/Mention légales</a></strong></p>
                </div>
            </div>
        </div>

</footer>




</body>
</html>