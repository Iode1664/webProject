<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../../webProject/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../webProject/public/css/style-identification.css">
</head>
<body>
{{--Header--}}
<header>

        <div class="container-fluid">
            <div id="top" class="row">
                <div id="bouton" class="form-group">
                    <div class="col-md-1 col-md-offset-10">
                        <a href="{{ url('login') }}">
                        <button type="submit" class="btn btn-success ">
                            Connection
                        </button></a>
                    </div>
                    <div class="col-md-1 ">
                        <a href="{{ url('register') }}">
                        <button type="submit" class="btn btn-danger ">
                            Enregistrement
                        </button></a>
                    </div>
                </div>
            </div>
            <div id="contain" class="row">
                <div id="logoCesi" class="col-md-4">
                    <a href="{{ url('http://www.cesi.fr/') }}"><img src="../../webProject/public/images/logoCesi.png"></a>
                </div>

                <div id="logoEi" class="col-md-4">
                    <a href="{{ url('https://www.eicesi.fr/') }}"><img src="../../webProject/public/images/logoEi.JPG"></a>
                </div>

                <div id="logoExia" class="col-md-4">
                    <div class="logo">
                        <a href="{{ url('https://exia.cesi.fr/') }}"><img src="../../webProject/public/images/logoExia.jpg"></a>
                    </div>
                </div>
            </div>
            <div id="bottom" class="row"></div>
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
                    <a href="{{ url('https://www.facebook.com/bde.cesibordeaux.9?fref=ts') }}"><img src="../../webProject/public/images/Facebook.png"></a>
                </div>

                <div id="twitter" class="col-md-1">
                    <a href="{{ url('https://twitter.com/bdecesibordeaux') }}"><img src="../../webProject/public/images/Twitter.png"></a>
                </div>

                <div id="mention" class="col-md-2">
                    <p><a href="">/Mention légales</a></p>
                </div>
            </div>
        </div>
</footer>

</body>
</html