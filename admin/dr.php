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
                Etablissement <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
            </h1> -->
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Gestion</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Direction Régionale</a>
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
            <h3 class="block-title">Liste des directions générale <small</small></h3>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <button type="button" class="btn btn-outline-primary push" data-toggle="modal" data-target="#add-newdr-modal">Ajouter</button>
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
                        <th class="text-center" style="width: 20%;">Nom</th>
                        <th class="d-none d-sm-table-cell" style="width: 12%;">Téléphone</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Commune</th>
                        <!--<th class="d-none d-sm-table-cell" style="width: 15%;">DRH</th>-->
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                        $diregionals=Database::SelectQuery("SELECT * FROM  directionregionale ORDER BY NomDirectionRegionale ASC");
                        foreach($diregionals as $dr):
                    ?>

                    <tr>
                        <td class="text-center font-size-sm"><?=$dr->NomDirectionRegionale?></td>
                        <td class="font-w600 font-size-sm"><?=$dr->TelDirectionRegionale?></td>
                        <td class="font-w600 font-size-sm"><?=$dr->EmailDirectionRegionale?></td>
                        <!--<td class="font-w600 font-size-sm">Test 1</td>-->
                        <td class="font-w600 font-size-sm">
                        <?=DataBase::SelectQuery("SELECT LibelleZone FROM localite WHERE CodeZone='$dr->CommuneDirectionRegionale'")[0]->LibelleZone?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-alt-primary editdiregional" data-toggle="modal" data-iddiregional="<?=$dr->IdDirectionRegionale ?>" data-nomdregional="<?=$dr->NomDirectionRegionale ?>" data-telregional="<?=$dr->TelDirectionRegionale ?>" data-emailregional="<?=$dr->EmailDirectionRegionale ?>" data-locregional="<?=$dr->CommuneDirectionRegionale ?>" title="Edit"  data-target="#Edit-newdr-modal">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-alt-primary todelete"  data-toggle="modal" data-target="#Delete-newdr-modal" data-iddiregional="<?=$dr->IdDirectionRegionale ?>" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
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
    
    
    <!--Modal Ajout Nouvelle direction-->

    	<!-- Large Block Modal -->
        <div class="modal" id="add-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="add-newdr-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Nouvelle Direction Régionale</h3>
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
                        <div class="col-6">
                            <label for="NomDirectionRegionale">Nom</label>
                            <input id="NomDirectionRegionale" class="form-control" type="text" name="NomDirectionRegionale" placeholder="Nom Direction Régionale">
                        </div>

                        <div class="col-6">
                            <label for="TelDirectionRegionale">Téléphone</label>
                            <input id="TelDirectionRegionale" class="form-control" type="text" name="TelDirectionRegionale" placeholder="Numéro de Téléphone">
                        </div>
				  	</div>

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <div class="col-6">
                            <label for="EmailDirectionRegionale">Email</label>
                            <input id="EmailDirectionRegionale" class="form-control" type="text" name="EmailDirectionRegionale" placeholder="Email direction Régionale">
				  	    </div>
                        <div class="col-6">
                            <label for="CommuneDirectionRegionale">Commune</label>
                            <select id="CommuneDirectionRegionale" class="js-select2 form-control" name="val-select2" style="width: 81.5%;" data-placeholder="Choisir une..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            <?php 
                                    $localites=Database::SelectQuery("SELECT * FROM localite WHERE NiveauStr>1 ORDER BY LibelleZone ASC");
                                    foreach($localites as $loc):
                                ?>
                                <option value="<?=$loc->CodeZone?>"><?=$loc->LibelleZone?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-group form-row">
                      <div class="col-12">
                            <label for="IdDRH">DRH</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdDRH"  name="IdDRH">
                                <option selected>Votre Choix...</option>
                                <option value="1">MAOTTO</option>
                                <option value="2">KADJO</option>
                                <option value="3">TIEMOKO</option>
                                <option value="2">DJIMAN</option>
                                <option value="3">FULGENCE</option>
                            </select>
				  	    </div>
                    </div>-->
				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button id="save" type="button" class="btn btn-primary" id="btnSubmit">Ajouter Nouvelle Direction</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->

    <!--Fin ajout Modal-->

    <!--Edit Modal-->

        <!-- Large Block Modal -->
    <div class="modal" id="Edit-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="Edit-newdr-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modification de la Direction Régionale</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content font-size-sm">
                    <?php /*$one->get_text('small', 2);*/ ?>
                    <form action="save.php" id="form">

                    <input id="IdDirectionRegionale" class="form-control" type="text" name="IdDirectionRegionale" style="display: none;">
			    	<div class="form-group form-row">
                        <div class="col-6">
                            <label for="NomDirectionRegionale">Nom</label>
                            <input id="modifNomDirectionRegionale" class="form-control" type="text" name="NomDirectionRegionale" placeholder="Nom Direction Régionale">
                        </div>

                        <div class="col-6">
                            <label for="TelDirectionRegionale">Téléphone</label>
                            <input id="modifTelDirectionRegionale" class="form-control" type="text" name="TelDirectionRegionale" placeholder="Numéro de Téléphone">
                        </div>
				  	</div>

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <div class="col-6">
                            <label for="EmailDirectionRegionale">Email</label>
                            <input id="modifEmailDirectionRegionale" class="form-control" type="text" name="EmailDirectionRegionale" placeholder="Email direction Régionale">
				  	    </div>
                        <div class="col-6">
                            <label for="CommuneDirectionRegionale">Commune</label>
                            <select class="js-select2 form-control" id="modifCommuneDirectionRegionale" name="val-select2" style="width: 81.5%;" data-placeholder="Choisir une..">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <?php 
                                    $localites=Database::SelectQuery("SELECT * FROM localite WHERE NiveauStr>1 ORDER BY LibelleZone ASC");
                                    foreach($localites as $loc):
                                ?>
                                <option value="<?=$loc->CodeZone?>"><?=$loc->LibelleZone?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-group form-row">
                      <div class="col-12">
                            <label for="IdDRH">DRH</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdDRH"  name="IdDRH">
                                <option selected>Votre Choix...</option>
                                <option value="1">MAOTTO</option>
                                <option value="2">KADJO</option>
                                <option value="3">TIEMOKO</option>
                                <option value="2">DJIMAN</option>
                                <option value="3">FULGENCE</option>
                            </select>
				  	    </div>
                    </div>-->
				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button id="saveModif" type="button" class="btn btn-primary" id="btnSubmit">Modifier Direction</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->
    <!--Fin Edit modal-->

    <!--Confirm Remove Modal-->
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
                    <input id="idtodelete" type="text" style="display: none;" />
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
                    <a id="confirmDelete" href="#ConfirmDelete-modal" data-toggle="modal" class="swal2-confirm btn btn-danger m-1" data-dismiss="modal" title="Edit">Oui, Supprimer!</a>
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

<div class="modal" id="ConfirmDelete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newdr-modal" aria-hidden="true">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">

        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-icon-success swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error" style="display: none;"></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
            <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
            <div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>
            <img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: flex;">Supprimé!</h2>
            <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button></div><div class="swal2-content"><div id="swal2-content" class="swal2-html-container" style="display: block;">Votre enregistrement à été supprimé.</div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message"></div></div><div class="swal2-actions"><div class="swal2-loader"></div><button type="button" class="swal2-confirm btn btn-success m-1 deleted" aria-label="" style="display: inline-block;" data-dismiss="modal">OK</button><button type="button" class="swal2-deny" aria-label="" style="display: none;">Non</button><button type="button" class="swal2-cancel btn btn-danger m-1" aria-label="" style="display: none;">Annuler</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div>
        </div>
    </div>
</div>  
<!--End Remove modal-->
                        
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Pop Out Block Modal -->



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


<script src="inc/logical/Crud/cruddiregion/diregion.js"></script>