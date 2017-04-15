<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style-Exia.css">
    @yield('custom_css')
</head>
<body>
{{--Header--}}
<header>
    <div class="container-fluid">
    <div class="container-fluid">
        <div id="top" class="row"></div>
        <div id="contain" class="row">
            <div id="logoCesi" class="col-md-1">
                <img src="../../../public/images/logoExia.jpg">
            </div>

            <div id="logoBDE" class="col-md-3">
                <img src="../../../public/images/logoBDE.png">
            </div>

            <div id="home" class="col-md-2">
                <div class="logo">
                    <img src="../../../public/images/home.png">
                </div>
                <div class="titre">
                    <p>ACCUEIL</p>
                </div>
            </div>
            <div id="activity" class="col-md-2">
                <div class="logo">
                    <img src="../../../public/images/activity.png">
                </div>
                <div class="titre">
                    <p>ACTIVITÉS</p>
                </div>
            </div>
            <div id="shop" class="col-md-2">
                <div class="logo">
                    <img src="../../../public/images/cadi.png">
                </div>
                <div class="titre">
                    <p>BOUTIQUE</p>
                </div>
            </div>
            <div id="cart" class="col-md-1">
                <div class="logo">
                    <img src="../../../public/images/panier.png">
                </div>
                <div class="titre">
                    <p>PANIER</p>
                </div>
            </div>
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
                    <img src="../../public/images/Facebook.png">
                </div>

                <div id="twitter" class="col-md-1">
                    <img src="../../public/images/Twitter.png">
                </div>

                <div id="mention" class="col-md-2">
                    <p><a href="">/Mention légales</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html