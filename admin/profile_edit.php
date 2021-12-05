<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/media/photos/photo8@2x.jpg');">
    <div class="bg-black-75">
        <div class="content content-full text-center">
            <div class="my-3">
                <?php $one->get_avatar(13, '', false, true); ?>
            </div>
            <h1 class="h2 text-white mb-0">Modification du compte</h1>
            <h2 class="h4 font-w400 text-white-75">
                John Parker
            </h2>
            <a class="btn btn-light" href="be_pages_generic_profile.php">
                <i class="fa fa-fw fa-arrow-left text-danger"></i> Retour au profil
            </a>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-boxed">
    <div class="row">
        <div class="col-md-7 col-xl-8">
            <!-- Updates -->
            
            <!-- Ratings -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-pencil-alt text-muted mr-1"></i> Modification du profil
                    </h3>
                </div>
                <div class="block-content">
                <form action="be_pages_projects_edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label for="one-profile-edit-name">Matricule</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Civilité</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="Monsieur">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Nom de jeune fille</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-username">Nom</label>
                            <input type="text" class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" value="john.parker">
                        </div>
                        <div class="form-group">
                            <label for="example-static-input-readonly">Prénom(s)</label>
                            <input type="text" class="form-control" id="example-static-input-readonly" value="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Sexe</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de naissance</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Situation matrimoniale</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Téléphone</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-email">Email</label>
                            <input type="email" class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" value="john.parker@example.com">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de prise de service</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="20/11/2019">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Emploi</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="INSTITUTEUR">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Fonction</label>
                            <input type="text" class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="Instituteur">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">
                                Modifier
                            </button>
                        </div>
                    </div>
                </div>
            </form>

                </div>
            </div>
            <!-- END Ratings -->


            <!-- END Updates -->
        </div>
        <div class="col-md-5 col-xl-4">
            <!-- Profil Image -->
            
            <!-- END Profil Image -->
            <!-- Signature Image -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Photo de profil
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media d-flex align-items-center push">
                        <div class="form-group">
                                <label>Votre Photo</label>
                                <div class="push">
                                    <?php $one->get_avatar(13); ?>
                                </div>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                                    <label class="custom-file-label" for="one-profile-edit-avatar">Choisir une photo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="text-center push">
                        <button type="button" class="btn btn-sm btn-light">View More..</button>
                    </div>
                    
                </div>
            <!-- END Signature Image -->
            <!-- Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Signature
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media d-flex align-items-center push">
                        <div class="form-group">
                                <label>Votre Photo</label>
                                <div class="push">
                                    <?php $one->get_avatar(13); ?>
                                </div>
                                <div class="custom-file">
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="one-profile-edit-avatar" name="one-profile-edit-avatar">
                                    <label class="custom-file-label" for="one-profile-edit-avatar">Choisir une photo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="text-center push">
                        <button type="button" class="btn btn-sm btn-light">View More..</button>
                    </div>
                    
                </div>
            </div>
            <!-- END Products -->
            
            
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
