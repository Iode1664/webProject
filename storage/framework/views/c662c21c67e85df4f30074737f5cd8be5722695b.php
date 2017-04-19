<?php $__env->startSection('title'); ?>
    Acceuil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_css'); ?>

    <link rel="stylesheet" href="/../webProject/public/css/style-acceuil.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>

    <div class="row">
        <div class="col-md-12 titreacc">
            <h1>BIENVENUE SUR LE SITE DU BDE CESI BORDEAUX</h1>
        </div>
    </div>

    <br>
<div class="row">
    <div class="col-md-12 imgacc">
        <img src="/../webProject/public/images/acceuilvignette.png">
    </div>
</div>

    <br>    <br>    <br>    <br>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('Classique-template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>