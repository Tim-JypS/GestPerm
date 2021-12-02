<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>
<?php $one->get_css('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css'); ?>


<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<style>
    .modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Inspection <small>Ressource Humaine</small></h3>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#add-newinsp-modal">+ Ajouter Nouvelle Inspection</button>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Nom & Prénom</th>
                        <th class="d-none d-sm-table-cell" style="width: 17%;">Tel</th>
                        <th class="d-none d-sm-table-cell" style="width: 17%;">Commune</th>
                        <th class="d-none d-sm-table-cell" style="width: 17%;">Direction</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 41; $i++) { ?>
                    <tr>
                        <td class="text-center font-size-sm"><?php echo $i; ?></td>
                        <td class="font-w600 font-size-sm">
                            <a href="be_pages_generic_blank.php"><?php $one->get_name(); ?></a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php $one->get_tag(); ?>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                        <td>
                            <em class="text-muted font-size-sm"><?php echo rand(2, 10); ?> days ago</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <?php /*$one->get_tag();*/ ?>
                            <a href="#Edit-newinsp-modal" class="badge badge-primary" data-toggle="modal"><i class="fa fa-fw fa-pencil-alt mr-1" data-toggle="tooltip" title="Editer"></i>Editer</a>

                            <a href="#Delete-newinsp-modal" class="badge badge-danger" data-toggle="modal"><i class="fa fa-fw fa-times mr-1" data-toggle="tooltip" title="Supprimer"></i>Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!--Modal Ajout Nouvelle direction-->

    	<!-- Large Block Modal -->
    <div class="modal" id="add-newinsp-modal" tabindex="-1" role="dialog" aria-labelledby="add-newinsp-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Nouvelle Inpection</h3>
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
                            <label for="NomInspection">Nom</label>
                            <input class="form-control" type="text" name="NomInspection" placeholder="Nom Inspection">
                        </div>

                        <div class="col-6">
                            <label for="TelInspection">Téléphone</label>
                            <input class="form-control" type="text" name="TelInspection" placeholder="Numéro de Téléphone">
                        </div>
				  	</div>

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <div class="col-6">
                            <label for="CommuneInspection">Commune</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneInspection"  name="CommuneInspection">
                                <option selected>Choisissez votre commune...</option>
                                <option value="1">Bingerville</option>
                                <option value="2">Cocody</option>
                                <option value="3">Dabou</option>
                                <option value="2">Yamoussoukro</option>
                                <option value="3">Adjamé</option>
                            </select>
				  	    </div>
                        <div class="col-6">
                            <label for="IdDirectionRegionale">Direction</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdDirectionRegionale"  name="IdDirectionRegionale">
                                <option selected>Choisissez votre commune...</option>
                                <option value="1">Bingerville</option>
                                <option value="2">Cocody</option>
                                <option value="3">Dabou</option>
                                <option value="2">Yamoussoukro</option>
                                <option value="3">Adjamé</option>
                            </select>
                        </div>
                    </div>
				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" id="btnSubmit">Ajouter Nouvelle Inspection</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->

    <!--Fin ajout Modal-->

    <!--Edit Modal-->

        <!-- Large Block Modal -->
    <div class="modal" id="Edit-newinsp-modal" tabindex="-1" role="dialog" aria-labelledby="Edit-newinsp-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modification de l'inspection</h3>
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
                            <label for="NomInspection">Nom</label>
                            <input class="form-control" type="text" name="NomInspection" placeholder="Nom Inspection">
                        </div>

                        <div class="col-6">
                            <label for="TelInspection">Téléphone</label>
                            <input class="form-control" type="text" name="TelInspection" placeholder="Numéro de Téléphone">
                        </div>
				  	</div>

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <div class="col-6">
                            <label for="CommuneInspection">Commune</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneInspection"  name="CommuneInspection">
                                <option selected>Choisissez votre commune...</option>
                                <option value="1">Bingerville</option>
                                <option value="2">Cocody</option>
                                <option value="3">Dabou</option>
                                <option value="2">Yamoussoukro</option>
                                <option value="3">Adjamé</option>
                            </select>
				  	    </div>
                        <div class="col-6">
                            <label for="IdDirectionRegionale">Direction</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdDirectionRegionale"  name="IdDirectionRegionale">
                                <option selected>Choisissez votre commune...</option>
                                <option value="1">Bingerville</option>
                                <option value="2">Cocody</option>
                                <option value="3">Dabou</option>
                                <option value="2">Yamoussoukro</option>
                                <option value="3">Adjamé</option>
                            </select>
                        </div>
                    </div>
				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" id="btnSubmit">Modifier Inspection</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->
    <!--Fin Edit modal-->

    <!--Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="Delete-newinsp-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newinsp-modal" aria-hidden="true">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="fa fa-fw fa-times"></i>
                        </div>						
                        <h4 class="modal-title w-100">Etes-vous sur?</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Voulez-vous vraiment supprimer ces enregistrements ? Ce processus ne peut pas être annulé.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>  
    <!--End Remove modal-->
                        
    <!-- END Dynamic Table with Export Buttons -->
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

<!-- Page JS Code -->
<?php $one->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
