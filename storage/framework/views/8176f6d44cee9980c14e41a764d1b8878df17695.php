<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js">    </script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">    </script>


        <?php if(auth::User()->promo === 'Exia'): ?>
            <link rel="stylesheet" href="../../webProject/public/css/style-Exia.css">
        <?php else: ?>
            <link rel="stylesheet" href="../../webProject/public/css/style-Ei.css">
        <?php endif; ?>
    <?php echo $__env->yieldContent('custom_css'); ?>

</head>
<body>


<header>
        <div class="container-fluid">
            <div id="top" class="row">
                <div id="caret" class="col-md-offset-10">
                    <li class="dropdown">
                        <?php if(auth::User()->promo === 'Exia'): ?>
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="<?php echo e(Auth::user()->avatar); ?>" height="50">
                            <?php echo e(Auth::user()->prenom); ?> <span class="caret"></span>
                        </button>
                        <?php else: ?>
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <img src="<?php echo e(Auth::user()->avatar); ?>" height="50">
                                <?php echo e(Auth::user()->prenom); ?> <span class="caret"></span>
                            </button>
                        <?php endif; ?>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Se deconnecter
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>

            <div id="contain" class="row">
                <div id="logoCesi" class="col-md-1">

                        <?php if(auth::User()->promo === 'Exia'): ?>
                            <img src="../../webProject/public/images/logoExia.jpg">
                        <?php else: ?>
                            <img src="../../webProject/public/images/logoEi.jpg">
                        <?php endif; ?>
                </div>

                <div id="logoBDE" class="col-md-2">
                    <img src="/../webProject/public/images/logoBDE.png">
                </div>

                <?php if(auth::User()->id_statut == 2 || 3): ?>
                <a href="<?php echo e(url('/ajout')); ?>">
                <div id="plus" class="col-md-1 ">
                    <img src="/../webProject/public/images/plus.png">
                </div></a>
                <?php endif; ?>

                <a href="<?php echo e(url('/home')); ?>">
                <div id="home" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/home.png">
                    </div>
                    <div class="titre">
                        <p>ACCUEIL</p>
                    </div>
                </div></a>

                <a href="<?php echo e(url('/activites')); ?>">
                <div id="activity" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/activity.png">
                    </div>
                    <div class="titre">
                        <p>ACTIVITÉS</p>
                    </div>
                </div></a>

                <a href="<?php echo e(route('product.index')); ?>">
                <div id="shop" class="col-md-2">
                    <div class="logo">
                        <img src="/../webProject/public/images/cadi.png">
                    </div>
                    <div class="titre">
                        <p>BOUTIQUE</p>
                    </div>
                </div></a>
            </div>
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
                    <p><strong><a href="">/Mention légales</a></strong></p>
                </div>
            </div>
        </div>

</footer>




</body>
</html>