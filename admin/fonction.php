<?php require 'inc/_global/config.php'; ?>
<?php require '../inc/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $one->get_css('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>
<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <!-- <h1 class="flex-sm-fill h3 my-2">
                Fonction <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
            </h1> -->
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Gestion</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Fonction</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Liste des fonctions <small</small></h3>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <button type="button" class="btn btn-outline-primary push" data-toggle="modal" data-target="#modal-block-popout">Ajouter</button>
                        <!-- <a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#modal-block-popout"></a> -->
                    </li>
                </ol>
            </nav>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell" style="width: 42%;">Fonction</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>
                        <!-- <th style="width: 15%;">Registered</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $fonctions=Database::SelectQuery("SELECT * FROM fonction ORDER BY NomFonction ASC");
                        foreach($fonctions as $fonction):
                    ?>
                    <tr>
                        <td class="font-w600 font-size-sm"><?=$fonction->NomFonction?></td>
                        <td class="text-center">
                        <div class="btn-group">
                                <a href="#Edit-newdr-modal" data-toggle="modal" class="btn btn-sm btn-alt-primary" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt" data-toggle="tooltip" title="Modifier"></i>
                                </a>
                                <a href="#Delete-newdr-modal" class="btn btn-sm btn-alt-primary" data-toggle="modal">
                                    <i class="fa fa-fw fa-times" data-toggle="tooltip" title="Supprimer"></i>
                                </a>
                            </div>
                        </td>
                        <!-- <td>
                            <em class="text-muted font-size-sm"><?php //echo rand(2, 10); ?> days ago</em>
                        </td> -->
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
    
    <!-- END Dynamic Table with Export Buttons -->
</div>

<!-- Pop Out Block Modal -->
<div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Ajouter une fonction</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    Fonction
                                </span>
                            </div>
                            <input type="text" class="form-control" id="example-group1-input1" name="example-group1-input1">
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full text-right border-top">
                    <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->


 <!--Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="Delete-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newdr-modal" aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-warning swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
                        <div class="swal2-header">
                            <ul class="swal2-progress-steps" style="display: none;"></ul>
                            <div class="swal2-icon swal2-error" style="display: none;"></div>
                            <div class="swal2-icon swal2-question" style="display: none;"></div>
                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                <div class="swal2-icon-content">!</div>
                            </div>
                            <div class="swal2-icon swal2-info" style="display: none;"></div>
                            <div class="swal2-icon swal2-success" style="display: none;"></div>
                            <img class="swal2-image" style="display: none;">
                            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Êtes-vous sûr?</h2>
                            <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button>
                        </div>
                        <div class="swal2-content">
                            <div id="swal2-content" class="swal2-html-container" style="display: block;">Vous ne pourrez plus recupérer cet enregistrement!</div>
                            <input class="swal2-input" style="display: none;">
                            <input type="file" class="swal2-file" style="display: none;">
                            <div class="swal2-range" style="display: none;">
                                <input type="range">
                                <output></output>
                            </div>
                            <select class="swal2-select" style="display: none;"></select>
                            <div class="swal2-radio" style="display: none;"></div>
                            <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;">
                            <input type="checkbox"><span class="swal2-label"></span></label>
                            <textarea class="swal2-textarea" style="display: none;"></textarea>
                            <div class="swal2-validation-message" id="swal2-validation-message"></div>
                        </div>
                        <div class="swal2-actions">
                            <div class="swal2-loader"></div>
                            <a href="#ConfirmDelete-modal" data-toggle="modal" class="swal2-confirm btn btn-danger m-1" data-dismiss="modal" title="Edit">Oui, Supprimer!</a>
                            <button type="button" class="swal2-deny" aria-label="" style="display: none;">Non</button>
                            <button type="button" class="swal2-cancel btn btn-secondary m-1" aria-label="" data-dismiss="modal" style="display: inline-block;">Annuler</button>
                        </div>
                        <div class="swal2-footer" style="display: none;"></div>
                        <div class="swal2-timer-progress-bar-container">
                            <div class="swal2-timer-progress-bar" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    <!--End Remove modal-->


<!--Confirm Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="ConfirmDelete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newdr-modal" aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">

                <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                    <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
                    <div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                    </div>
                    <img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">Supprimé!</h2>
                    <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: block;">Votre enregistrement à été supprimé.</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><button type="button" class="swal2-confirm btn btn-success m-1" aria-label="" style="display: inline-block;" data-dismiss="modal">OK</button><button type="button" class="swal2-deny" aria-label="" style="display: none;">Non</button><button type="button" class="swal2-cancel btn btn-danger m-1" aria-label="" style="display: none;">Annuler</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div>
                </div>
            </div>
        </div>  
    <!--End Remove modal-->





        <!--Edit Modal-->

        <!-- Large Block Modal -->
        <div class="modal" id="Edit-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="Edit-newdr-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modification de la fonction</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content font-size-sm">
                    <?php /*$one->get_text('small', 2);*/ ?>
                    <form action="save.php" id="form">
				  	<div class="form-group form-row">
                      <div class="col-12">
                            <label for="NomFonction">Fonction</label>
                            <input class="form-control" type="text" name="NomFonction" placeholder="Fonction">
				  	    </div>
                    </div>

				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" id="btnSubmit">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->
    <!--Fin Edit modal-->
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
