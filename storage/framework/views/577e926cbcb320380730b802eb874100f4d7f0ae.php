<?php $__env->startSection('title'); ?>
    bde cesi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_css'); ?>
    <link rel="stylesheet" href="/../webProject/public/css/style-activitys.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
    <div class="container">
        <div class="row">
            <div class="nav_btns">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-5" id="activity_title">
                <h2>ACTIVITÉS</h2>
            </div>
        </div>
        <?php $__currentLoopData = $activitys->chunk(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activitysChunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <br><br>
            <div class="row">
                <div class="line">
                    
                    <?php $__currentLoopData = $activitysChunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-6">
                            <div class="thumbnail">
                                <div class="wrapper">
                                    <img class="slide" src="<?php echo e($activity->photo); ?>">
                                    <div class="caption">

                                        <h3>&nbsp; <?php echo e($activity->nom); ?></h3>
                                        <br>
                                        <p class="desc"><?php echo e($activity->description); ?></p>
                                        <br>
                                    </div>
                                    <a href="<?php echo e(route('activity.show',['id'=>$activity->id])); ?>"
                                       class="btn btn-primary pull-right" role="button">Voir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <div class="panel panel-default">
                    <div class="panel-heading">SUGGESTION ACTIVITÉ</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('activites.stores')); ?>"
                              enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('activite') ? ' has-error' : ''); ?>">
                                <label for="activite" class="col-md-4 control-label">Activité</label>

                                <div class="col-md-6">
                                    <input id="activite" type="text" class="form-control" name="activite"
                                           value="<?php echo e(old('activite')); ?>" required autofocus>

                                    <?php if($errors->has('activite')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('activite')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('date_debut') ? ' has-error' : ''); ?>">
                                <label for="date_debut" class="col-md-4 control-label">Date de début</label>

                                <div class="col-md-6">
                                    <input id="date_debut" type="datetime-local" class="form-control" name="date_debut"
                                           required>

                                    <?php if($errors->has('date_debut')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('date_debut')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('date_fin') ? ' has-error' : ''); ?>">
                                <label for="date_fin" class="col-md-4 control-label">Date de fin</label>

                                <div class="col-md-6">
                                    <input id="date_fin" type="datetime-local" class="form-control" name="date_fin"
                                           required>

                                    <?php if($errors->has('date_fin')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('date_fin')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('lieu') ? ' has-error' : ''); ?>">
                                <label for="lieu" class="col-md-4 control-label">Lieu</label>

                                <div class="col-md-6">
                                    <input id="lieu" type="text" class="form-control" name="lieu"
                                           value="<?php echo e(old('lieu')); ?>" required autofocus>

                                    <?php if($errors->has('lieu')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('lieu')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('photo') ? ' has-error' : ''); ?>">
                                <label for="photo" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="12345"/>
                                    <input id="photo" type="file" class="form-control" name="photo"
                                           value="<?php echo e(old('photo')); ?>" required autofocus>

                                    <?php if($errors->has('photo')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('photo')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                <label for="lieu" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <textarea name="description" class="form-control" id="description" rows="10"
                                              cols="50"></textarea>

                                    <?php if($errors->has('description')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Envoyer
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
<?php echo $__env->make('Classique-template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>