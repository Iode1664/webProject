<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="/../webProject/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../webProject/public/css/style-identification.css">
    <link rel="shortcut icon" type="image/x-icon" href="/../webProject/public/images/logo-cesi-onglet.ico" />

</head>
<body>

<header>

        <div class="container-fluid">
            <div id="top" class="row">
                <div id="bouton" class="form-group">
                    <div class="col-md-1 col-md-offset-10">
                        <a href="<?php echo e(url('login')); ?>">
                        <button type="submit" class="btn btn-success ">
                            Connexion
                        </button></a>
                    </div>
                    <div class="col-md-1 ">
                        <a href="<?php echo e(url('register')); ?>">
                        <button type="submit" class="btn btn-danger ">
                            Enregistrement
                        </button></a>
                    </div>
                </div>
            </div>
            <div id="contain" class="row">

                <div id="logoCesi" class="col-md-4">
                    <a href="<?php echo e(url('http://www.cesi.fr/')); ?>"><img src="/../webProject/public/images/logoCesi.png"></a>
                </div>

                <div id="logoEi" class="col-md-4">
                    <a href="<?php echo e(url('https://www.eicesi.fr/')); ?>"><img src="/../webProject/public/images/logoEi.JPG"></a>
                </div>

                <div id="logoExia" class="col-md-4">
                    <div class="logo">
                        <a href="<?php echo e(url('https://exia.cesi.fr/')); ?>"><img src="/../webProject/public/images/logoExia.jpg"></a>
                    </div>
                </div>

            </div>
            <div id="bottom" class="row"></div>
        </div>

</header>



<div id="contenu">
    <?php echo $__env->yieldContent('contenu'); ?>
</div>



<footer>
        <div class="container-fluid">
            <div class="row" id="foot">
                <div id="copyright" class="col-md-2">
                    <p>@2017  BDECesi 2017</p>
                </div>
                <div id="contact" class="col-md-6">
                    <p>60 rue de Maurian <br>
                        33295 Blanquefort, France<br>
                        presidentBDE@viacesi.fr<br>
                        +33 5 56 95 50 50</p>
                </div>

                <div id="facebook" class="col-md-1">
                    <a href="<?php echo e(url('https://www.facebook.com/bde.cesibordeaux.9?fref=ts')); ?>"><img src="/../webProject/public/images/Facebook.png"></a>
                </div>

                <div id="twitter" class="col-md-1">
                    <a href="<?php echo e(url('https://twitter.com/bdecesibordeaux')); ?>"><img src="/../webProject/public/images/Twitter.png"></a>
                </div>

                <div id="mention" class="col-md-2">
                    <p><a  class="mention" href="<?php echo e(url('/mentionLegales')); ?>">/Mention légales</a></p>
                </div>
            </div>
        </div>
</footer>

</body>
</html>