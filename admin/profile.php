<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/media/photos/photo8@2x.jpg');">
    <div class="bg-black-50">
        <div class="content content-full text-center">
            <div class="my-3">
                <?php $one->get_avatar(13, '', false, true); ?>
            </div>
            <h1 class="h2 text-white mb-0">John Parker</h1>
            <span class="text-white-75">UI Designer</span>
       </div>
    </div>
</div>
<!-- END Hero -->

<!-- Stats -->
<div class="bg-white border-bottom">
    <div class="content content-boxed">
        <div class="row items-push text-center">
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Demandes</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">5</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Demande en cours</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">1</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Messages</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">10</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Notifications</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">3</a>
            </div>
        </div>
    </div>
</div>
<!-- END Stats -->

<!-- Page Content -->
<div class="content content-boxed">
    <div class="row">
        <div class="col-md-7 col-xl-8">
            <!-- Updates -->
            
            <!-- Ratings -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-pencil-alt text-muted mr-1"></i> Mes informations personnelles
                    </h3>
                </div>
                <div class="block-content">
                <form action="be_pages_projects_edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-12 col-xl-12">
                        <div class="form-group">
                            <label for="one-profile-edit-name">Matricule</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Civilité</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="Monsieur">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Nom de jeune fille</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-username">Nom</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" value="john.parker">
                        </div>
                        <div class="form-group">
                            <label for="example-static-input-readonly">Prénom(s)</label>
                            <input type="text" readonly class="form-control" id="example-static-input-readonly" value="email@example.com">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Sexe</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de naissance</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Situation matrimoniale</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Téléphone</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="12345A">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-email">Email</label>
                            <input type="email" readonly class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" value="john.parker@example.com">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de prise de service</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="20/11/2019">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Emploi</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="INSTITUTEUR">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Fonction</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="Instituteur">
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
            <!-- Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Stats
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="media d-flex align-items-center push">
                        <div class="mr-3">
                            <a class="item item-rounded bg-info" href="javascript:void(0)">
                                <i class="si si-user fa-2x text-white-75"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="font-w600">Infos personnelles</div>
                            <div class="font-size-sm">
                                <div class="progress push">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media d-flex align-items-center push">
                        <div class="mr-3">
                            <a class="item item-rounded bg-amethyst" href="javascript:void(0)">
                                <i class="si si-briefcase fa-2x text-white-75"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="font-w600">Infos professionnelles</div>
                            <div class="font-size-sm">
                                <div class="progress push">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media d-flex align-items-center push">
                        <div class="mr-3">
                            <a class="item item-rounded bg-city" href="javascript:void(0)">
                                <i class="si si-note fa-2x text-white-75"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="font-w600">Signature</div>
                            <div class="font-size-sm">
                                <div class="progress push">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <span class="font-size-sm font-w600">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
