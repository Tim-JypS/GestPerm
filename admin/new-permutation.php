<?php require 'inc/_global/config.php'; ?>
<?php require '../inc/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $one->get_css('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <!-- <h1 class="flex-sm-fill h3 my-2">
                Etablissement <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
            </h1> -->
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Gestion</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Demande de permutation</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Labels on top -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Info Annonce</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        nul ne peut postuler en même temps pour les NEAt bet les INEAT<br>
                    </p>
                </div>
                <div class="col-lg-8">
                    <!-- Form Labels on top - Default Style -->
                    <form action="save.php" id="form">

                        <div class="form-group form-row">
                        <div class="col-12">
                                <label for="LocaliteDesireeAnnonce">Choisir la localité désirée</label>
                                <select class="custom-select my-1 mr-sm-2" id="LocaliteDesireeAnnonce"  name="LocaliteDesireeAnnonce">
                                    <option selected>Votre Choix...</option>
                                    <option value="1">Bouake</option>
                                    <option value="2">Benié</option>
                                    <option value="3">Sakassou</option>
                                    <option value="2">Yaou</option>
                                    <option value="3">Bassam</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <div class="col-12">
                                <label for="LocaliteDesireeAnnonce">Type d'annonce</label>
                                <select class="custom-select my-1 mr-sm-2" id="LocaliteDesireeAnnonce"  name="LocaliteDesireeAnnonce">
                                    <option selected>Votre Choix...</option>
                                    <option value="1">Permutation</option>
                                    <option value="2">Mutation</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Localité origine
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="LocaliteOrigineAnnonce" name="LocaliteOrigineAnnonce" disabled="disabled" value="Bouna">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        ID Agent
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="IdAgent" name="IdAgent" disabled="disabled" value="1889M85">
                            </div>
                        </div>

                        <div class="block-content block-content-full text-right border-top">
                            <button type="button" class="btn btn-primary" id="btnSubmit">Nouvelle Annonce</button>
                        </div>
                        
                    </form>
                    <!-- END Form Labels on top - Default Style -->

                </div>
            </div>
        </div>
    </div>
    <!-- END Grid Based -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/dataTables.buttons.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.print.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.html5.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.flash.min.js'); ?>
<?php $one->get_js('js/plugins/datatables/buttons/buttons.colVis.min.js'); ?>
<?php $one->get_js('js/plugins/select2/js/select2.full.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $one->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ One.helpers('select2'); });</script>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
