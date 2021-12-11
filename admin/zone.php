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
                        <a class="link-fx" href="">Zones geographique</a>
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
            <h3 class="block-title">Zones<small</small></h3>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <button type="button" class="btn btn-outline-primary push" data-toggle="modal" data-target="#add-newZone-modal">Ajouter</button>
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
                        <th class="text-center" style="width: 20%;">Localites</th>
                        <th class="d-none d-sm-table-cell" style="width: 12%;">Zones</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">ville</th>
                        
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-w600 font-size-sm">Test 1</td>
                        <td class="font-w600 font-size-sm">Test 1</td>
                        <td class="font-w600 font-size-sm">Test 1</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" title="Edit"  data-target="#Edit-newZone-modal">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-alt-primary"  data-toggle="modal" data-target="#Delete-newZone-modal" title="Delete">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </td>
                        <!-- <td>
                            <em class="text-muted font-size-sm"><?php //echo rand(2, 10); ?> days ago</em>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
    
    
    <!--Modal Ajout Nouvelle direction-->

    	<!-- Large Block Modal -->
        <div class="modal" id="add-newZone-modal" tabindex="-1" role="dialog" aria-labelledby="add-newZone-modal" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Ajouter</h3>
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
                            <label for="CommuneZone">Type</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                            
                            <option selected>Choix...</option>
                                <option value="1">La Me</option>
                                <option value="2">Moronou</option>
                                <option value="3">12 Montagnes</option>
                                <option value="2">Lagune</option>
                                <option value="3">Cocody</option>
                            </select>
                        </div>

                        <!--div class="col-6">
                            <label for="CommuneZone">villes</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                            
                            <option selected>Choix...</option>
                                <option value="1">Abidjan</option>
                                <option value="2">Aboisso</option>
                                <option value="3">Bonoua</option>
                                <option value="2">Grand Bassam</option>
                                <option value="3">Cocody</option>
                            </select>
                        </div-->
				  	</div>

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <div class="col-12">
                            <label for="LibelléZone">Libellé</label>
                            <input class="form-control" type="text" name="LibelléZone" placeholder="Entrer le nom de la loclité ">
				  	    </div>
                        <!--div class="col-6">
                            <label for="CommuneZone">Localites</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                            <option selected>Choix...</option>
                                <option value="1">Bouna</option>
                                <option value="2">n'zaranou</option>
                                <option value="3">Mossou</option>
                                <option value="2">Sipilou</option>
                                <option value="3">Agboville</option>
                            </select>
                        </div-->
                        <!--div class="col-6">
                            <label for="CommuneZone">Zones</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                            <option selected>Choix...</option>
                            <option selected>Choix...</option>
                                <option value="1">ZONE 1</option>
                                <option value="2">ZONE 2</option>
                                <option value="3">ZONE 3</option>
                                <option value="2">ZONE 4</option>
                                <option value="3">ZONE 5</option>
                            </select>
                        </div-->
                    </div>
                    <div class="form-group form-row">
                    <div class="col-12">
                            <label for="CommuneZone">Issue de ..</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                            <option selected>Choix...</option>
                                <option value="1">Abidjan</option>
                                <option value="2">Aboisso</option>
                                <option value="3">Bonoua</option>
                                <option value="2">Grand Bassam</option>
                                <option value="3">Cocody</option>
                            </select>
                        </div>

                    </div>

                    <!--div class="form-group form-row">
                      <div class="col-12">
                            <label for="IdVilles">Villes</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdVilles"  name="IdVilles">
                                <option selected>Votre Choix...</option>
                                <option value="1"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                                <option value="2"></option>
                                <option value="3"></option>
                            </select>
				  	    </div>
                    </div-->
				  	
				</form>
                    </div>


                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" id="btnSubmit">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->

    <!--Fin ajout Modal-->

    <!--Edit Modal-->

        <!-- Large Block Modal -->
    <div class="modal" id="Edit-newZone-modal" tabindex="-1" role="dialog" aria-labelledby="Edit-newZone-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modifier</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content font-size-sm">
                    <?php /*$one->get_text('small', 2);*/ ?>
                    <form action="save.php" id="form">

			    	<!--div class="form-group form-row">
                        <div class="col-6">
                            <label for="NomZone">Nom</label>
                            <input class="form-control" type="text" name="NomZone" placeholder="Nom ">
                        </div>

                        <div class="col-6">
                            <label for="TelZone">Téléphone</label>
                            <input class="form-control" type="text" name="TelZone" placeholder="Numéro de Téléphone">
                        </div>
				  	</div-->

				  	<!--<div class="form-group">
					    <label for="first_name">Téléphone</label>
					    <input class="form-control" type="text" name="first_name">
				  	</div>-->
				  	<div class="form-group form-row">
                      <!--div class="col-6">
                            <label for="LibelléZone">Email</label>
                            <input class="form-control" type="text" name="LibelléZone" placeholder="Email ">
				  	    </div-->
                        <div class="col-4">
                            <label for="CommuneZone">Localites</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                                <option selected>Choix...</option>
                                <option value="1">Bouna</option>
                                <option value="2">n'zaranou</option>
                                <option value="3">Mossou</option>
                                <option value="2">Sipilou</option>
                                <option value="3">Agboville</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="CommuneZone">Zones</label>
                            <select class="custom-select my-1 mr-sm-2" id="CommuneZone"  name="CommuneZone">
                                <option selected>Choix...</option>
                                <option value="1">ZONE 1</option>
                                <option value="2">ZONE 2</option>
                                <option value="3">ZONE 3</option>
                                <option value="2">ZONE 4</option>
                                <option value="3">ZONE 5</option>
                            </select>
                        </div>
                          <div class="col-4">
                            <label for="IdVilles">villes</label>
                            <select class="custom-select my-1 mr-sm-2" id="IdVilles"  name="IdVilles">
                                <option selected>Choix...</option>
                                <option value="1">Abidjan</option>
                                <option value="2">Aboisso</option>
                                <option value="3">Bonoua</option>
                                <option value="2">Grand Bassam</option>
                                <option value="3">Cocody</option>
                            </select>
				  	    </div>
                    </div>

                    <div class="form-group form-row">
                      
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

    <!--Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="Delete-newZone-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newZone-modal" aria-hidden="true">
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
                        <p>Voulez-vous vraiment supprimer ces enregistrements ?</p>
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
