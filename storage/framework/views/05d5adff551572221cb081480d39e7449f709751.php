<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Enregistrement</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                            <label for="prenom" class="col-md-4 control-label">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="<?php echo e(old('prenom')); ?>" required autofocus>

                                <?php if($errors->has('prenom')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prenom')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Addresse E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmer Mot de Passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('promo') ? ' has-error' : ''); ?>">
                            <label for="promo" class="col-md-4 control-label">De quelle promo viens-tu?</label>

                            <div class="col-md-6">
                                <input id="exia" type="radio" class="form-checkinput" name="promo" value="exia" required><label for="exia">Exia</label><br />
                                <input id="ei" type="radio" class="form-checkinput" name="promo" value="ei" required><label for="ei">EI</label><br />

                                <?php if($errors->has('promo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('promo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('avatar') ? ' has-error' : ''); ?>">
                            <label for="avatar" class="col-md-4 control-label">Choisi ton avatar</label>

                            <div class="col-md-6">
                                <input id="photo1" type="radio" class="form-checkinput" name="avatar" value="http://localhost/swro/public/avatar/alonso.jpg" required><label for="photo1"><img src="http://localhost/swro/public/avatar/alonso.jpg"></label><br />
                                <input id="photo2" type="radio" class="form-checkinput" name="avatar" value="http://localhost/swro/public/avatar/mercos.jpg" required><label for="photo2"><img src="http://localhost/swro/public/avatar/mercos.jpg"></label><br />

                                <?php if($errors->has('promo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('promo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrement
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>