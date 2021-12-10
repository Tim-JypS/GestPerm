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
                Fonction <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
            </h1> -->
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Gestion</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Historique des permutations</a>
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
            <h3 class="block-title">Liste des permutations <small</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Date</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Matricule Demandeur</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Nom Demandeur</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Fonction</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Localité d'origine</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Localité désirée</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Matricule Adhérent</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Nom Adhérent</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Actions</th>
                        <!-- <th style="width: 15%;">Registered</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $annonces=Database::SelectQuery("SELECT * FROM annonce ORDER BY DateAjoutAnnonce DESC");
                        foreach($annonces as $annonce):
                    ?>
                    <tr>
                        <?php $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");?>
                        <?php $agent2=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->AdherantAnnonce'");?>
                        <td class="font-w600 font-size-sm"><?=$annonce->DateAjoutAnnonce?></td>
                        <td class="font-w600 font-size-sm"><?=$agent1->MatriculeAgent?></td>
                        <td class="font-w600 font-size-sm"><?=$agent1->NomAgent. " ". $agent1->PrenomsAgent?></td>
                        <td class="font-w600 font-size-sm"><?=DataBase::SelectQuery("SELECT NomFonction FROM fonction WHERE IdFonction='$agent1->IdFonction'")[0]->NomFonction?></td>
                        <td class="font-w600 font-size-sm">Abidjan</td>
                        <td class="font-w600 font-size-sm">Tiassalé</td>
                        <td class="font-w600 font-size-sm"><?=$agent2->MatriculeAgent?></td>
                        <td class="font-w600 font-size-sm"><?=$agent2->NomAgent. " ". $agent2->PrenomsAgent?></td>

                        <td class="text-center">
                            Validée
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#Edit-newinsp-modal">
                                    <i class="fa fa-2x fa-print" data-toggle="tooltip" title="Imprimer"></i>
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
    
    <!-- END Dynamic Table with Export Buttons -->
</div>

 <!--Remove Modal-->
        <!-- Modal HTML -->
        <div class="modal" id="Delete-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="Delete-newdr-modal" aria-hidden="true">
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





        <!--Edit Modal-->

        <!-- Large Block Modal -->
        <div class="modal" id="Edit-newdr-modal" tabindex="-1" role="dialog" aria-labelledby="Edit-newdr-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Modification de la Localité</h3>
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
