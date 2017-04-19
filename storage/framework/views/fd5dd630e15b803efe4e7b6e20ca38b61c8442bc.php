<?php $__env->startSection('title'); ?>
    bde cesi
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenu'); ?>

    <?php if(auth::User()->id_statut == 1): ?>
        <br> <br> <br> <br>
        <div class="col-md-12">
            <a id="erreur" href="<?php echo e(url('/home')); ?>"><strong>ERREUR</strong></a>
        </div>
        <br> <br> <br> <br><br> <br> <br> <br><br> <br> <br> <br>
    <?php else: ?>


        <div class="container">
            <div class="row">

                <?php if(auth::User()->id_statut == 2 || 3): ?>
                <div class="col-md-5 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">AJOUT ACTIVITÉ</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="<?php echo e(route('activites.store')); ?>" enctype="multipart/form-data">
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
                                        <input id="date_debut" type="datetime-local" class="form-control"
                                               name="date_debut" required>

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
                                    <label for="lieu" class="col-md-4 control-label">Adresse</label>

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
                <?php endif; ?>


                <?php if(auth::User()->id_statut == 3): ?>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">AJOUT ARTICLE</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="<?php echo e(route('product.store')); ?>" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                                        <label for="nom" class="col-md-4 control-label">Article</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text" class="form-control" name="nom"
                                                   value="<?php echo e(old('nom')); ?>" required autofocus>

                                            <?php if($errors->has('nom')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('nom')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group<?php echo e($errors->has('prix') ? ' has-error' : ''); ?>">
                                        <label for="prix" class="col-md-4 control-label">Prix</label>

                                        <div class="col-md-6">
                                            <input id="prix" type="text" class="form-control" name="prix"
                                                   value="<?php echo e(old('prix')); ?>" required autofocus>

                                            <?php if($errors->has('prix')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('prix')); ?></strong>
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


                    <div class="col-md-5 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">AJOUT MEMBRE BDE</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="<?php echo e(route('ajout-membre')); ?>">
                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-group<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                                        <label for="nom" class="col-md-4 control-label">Nom</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text" class="form-control" name="nom"
                                                   value="<?php echo e(old('nom')); ?>" required autofocus>

                                            <?php if($errors->has('nom')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('nom')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                                        <label for="prenom" class="col-md-4 control-label">Prenom</label>

                                        <div class="col-md-6">
                                            <input id="prenom" type="text" class="form-control" name="prenom"
                                                   value="<?php echo e(old('prenom')); ?>" required autofocus>

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
                                            <input id="email" type="email" class="form-control" name="email"
                                                   value="<?php echo e(old('email')); ?>" required>

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
                                            <input id="password" type="password" class="form-control" name="password"
                                                   required>

                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirmer Mot de
                                            Passe</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                   name="password_confirmation" required>
                                        </div>
                                    </div>


                                    <div class="form-group<?php echo e($errors->has('promo') ? ' has-error' : ''); ?>">
                                        <label for="promo" class="col-md-4 control-label">De quelle promo
                                            viens-tu?</label>

                                        <div class="col-md-6">
                                            <input id="exia" type="radio" class="form-checkinput" name="promo"
                                                   value="exia" required><label for="exia">Exia</label><br/>
                                            <input id="ei" type="radio" class="form-checkinput" name="promo" value="ei"
                                                   required><label for="ei">EI</label><br/>

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
                                            <input id="photo1" type="radio" class="form-checkinput" name="avatar"
                                                   value="../../webProject/public/avatar/alonso.jpg" required><label
                                                    for="photo1"><img
                                                        src="../../webProject/public/avatar/alonso.jpg"></label><br/>
                                            <input id="photo2" type="radio" class="form-checkinput" name="avatar"
                                                   value="../../webProject/public/avatar/mercos.jpg" required><label
                                                    for="photo2"><img
                                                        src="../../webProject/public/avatar/mercos.jpg"></label><br/>

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
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Classique-template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>