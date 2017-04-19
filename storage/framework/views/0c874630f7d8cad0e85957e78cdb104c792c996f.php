<?php $__env->startSection('title'); ?>
    Bde cesi acceuil
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_css'); ?>

    <link rel="stylesheet" href="/../webProject/public/css/style-identification.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenu'); ?>

    <p>

        <br>
        <br>
        <br>

      <div class="row">
        <div class="col-md-12 imgacc" style="text-align: center">
            <img src="/../webProject/public/images/acceuil.png" >
        </div>
    </div>

        <br>
        <br>
        <br>
        <br>




                                                                                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Identification-template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>