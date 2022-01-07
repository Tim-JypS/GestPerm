<?php 
    session_start();
    if (!isset($_SESSION['auth']["user"]->IdAgent)) 
    header('location:index.php');
?>
<?php require 'inc/_global/config.php'; ?>
<?php require '../inc/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<?php if(!$auto) header('location:../404.php'); ?>

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
                        <a class="link-fx" href="">Permutation</a>
                    </li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<?php
    $ErrPage="nosign";
    $ErrMsg="";
    if($auto)
    {
        $Sign=DataBase::SelectQuery("SELECT signatureAgent FROM agent WHERE IdAgent='".$IdAgent."'")[0]->signatureAgent;
        $Sign="upload/signature/".$Sign;
        if(!file_exists($Sign) || $Sign=="upload/signature/")
        {
            $ErrMsg="Merci d'ajouter votre signature électronique à votre profil.";
        }
    }
?>

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Permutation en attente <small</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table  id="example" class="table table-bordered table-striped table-vcenter nowrap"  style="width:100%">
                <thead>
                        <tr>
                            <th class="d-none d-sm-table-cell">Date</th>
                            <th class="d-none d-sm-table-cell">Matricule Demandeur</th>
                            <th class="d-none d-sm-table-cell">Nom Demandeur</th>
                            <th class="d-none d-sm-table-cell">Fonction</th>
                            <th class="d-none d-sm-table-cell">Localité d'origine</th>
                            <th class="d-none d-sm-table-cell">Localité désirée</th>
                            <th class="d-none d-sm-table-cell">Matricule Adhérent</th>
                            <th class="d-none d-sm-table-cell">Nom Adhérent</th>
                            <th class="d-none d-sm-table-cell">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $annonces=Database::SelectQuery("SELECT v.IdValidation, v.DateEnvoiValidation, a.* FROM annonce a, validationannonce v WHERE a.IdAnnonce=v.IdAnnonce AND v.ValideurValidation='".$IdAgent."' AND StatutValidation='EN' ORDER BY v.DateEnvoiValidation DESC");
                            foreach($annonces as $annonce):
                        ?>
                        <tr>
                            <?php $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");?>
                            <?php $agent2=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->AdherantAnnonce'");?>
                            <td class="font-w600 font-size-sm"><?=$annonce->DateEnvoiValidation?></td>
                            <td class="font-w600 font-size-sm"><?=$agent1[0]->MatriculeAgent?></td>
                            <td class="font-w600 font-size-sm"><?=$agent1[0]->NomAgent. " ". $agent1[0]->PrenomsAgent?></td>
                            <td class="font-w600 font-size-sm"><?=DataBase::SelectQuery("SELECT NomFonction FROM fonction WHERE IdFonction='".$agent1[0]->IdFonction."'")[0]->NomFonction?></td>
                            <td class="font-w600 font-size-sm"><?php
                                $codeZone=$annonce->LocaliteOrigineAnnonce;
                                $query="SELECT LibelleZone FROM localite WHERE CodeZone='".$codeZone."'";
                                $loc1=Database::SelectQuery($query)[0]->LibelleZone;
                                echo $loc1?></td>
                            <td class="font-w600 font-size-sm"><?php
                                $codeZone=$annonce->LocaliteDesireeAnnonce;
                                $query="SELECT LibelleZone FROM localite WHERE CodeZone='".$codeZone."'";
                                $loc2=Database::SelectQuery($query)[0]->LibelleZone;
                                echo $loc2 ?></td>
                            <td class="font-w600 font-size-sm"><?=$agent2[0]->MatriculeAgent?></td>
                            <td class="font-w600 font-size-sm"><?=$agent2[0]->NomAgent. " ". $agent2[0]->PrenomsAgent?></td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-primary">
                                        <a href="print/index.php?fiche=<?=$annonce->IdAnnonce?>" target="_blank"><i id="print" data-values="" class="fa fa-2x fa-print" data-toggle="tooltip" title="Imprimer"></i></a>
                                    </button>
                                    <?php if($auto) : ?>
                                    <button type="button" class="btn btn-sm btn-alt-primary validerpermut" data-toggle="modal" data-target="#modal-block-popoutModif" data-idannonce="<?=$annonce->IdAnnonce?>" data-idvalidation="<?=$annonce->IdValidation?>" data-agent1="<?=$agent1[0]->NomAgent. " ". $agent1[0]->PrenomsAgent?>" data-loc1="<?=$loc1?>" data-agent2="<?=$agent2[0]->NomAgent. " ". $agent2[0]->PrenomsAgent?>" data-loc2="<?=$loc2?>">
                                        <a><i class="fa fa-2x fa-check-circle" data-toggle="tooltip" title="Valider"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-alt-primary refuserpermut"  data-toggle="modal" data-target="#Delete-newinsp-modal" data-idannonce="<?=$annonce->IdAnnonce?>" data-idvalidation="<?=$annonce->IdValidation?>" data-agent1="<?=$agent1[0]->NomAgent. " ". $agent1[0]->PrenomsAgent?>" data-loc1="<?=$loc1?>" data-agent2="<?=$agent2[0]->NomAgent. " ". $agent2[0]->PrenomsAgent?>" data-loc2="<?=$loc2?>">
                                        <a><i class="fa fa-2x fa-times" data-toggle="tooltip" title="Refuser"></i></a>
                                    </button><?php endif ?>
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
<div class="modal fade" id="modal-block-popoutModif" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Valider une permutation</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content font-size-sm">
                    <div class="form-group form-row">
                        <div class="col-12">
                            <label for="">Instituteur demandeur</label>
                            <input class="form-control" id="agent1" type="text" readonly="readonly">
                            <input class="form-control" style="display: none;" id="idvalidation" type="text" readonly="readonly">
                            <input class="form-control" style="display: none;" id="idannonce" type="text" readonly="readonly">
                            <input class="form-control" style="display: none;" id="iduser" type="text" value="<?=$IdAgent?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-12">
                            <label for="">Localité demandeur</label>
                            <input class="form-control" id="loc1" type="text" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-12">
                            <label for="">Instituteur adhérent</label>
                            <input class="form-control" id="agent2" type="text" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-12">
                            <label for="">Localité adhérent</label>
                            <input class="form-control" id="loc2" type="text" readonly="readonly">
                        </div>
                    </div>
                    <?php if($ErrPage=="nosign" && !empty($ErrMsg)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <p class="mb-0"><?=$ErrMsg?></p>
                            </div>
                        </div><?php endif ?>
                </div>
                <div class="block-content block-content-full text-right border-top">
                    <button id="closeValid" type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                    <?php if($ErrPage=="nosign" && empty($ErrMsg)): ?>
                    <button id="saveValid" type="button" class="btn btn-primary" data-dismiss="modal">Valider</button>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Pop Out Block Modal -->



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

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollX": true
        } );
    });
    $('.validerpermut').click(function()
    {
        let agent1=($(this).data('agent1'));
        let loc1=($(this).data('loc1'));
        let agent2=($(this).data('agent2'));
        let loc2=($(this).data('loc2'));
        let idvalidation=($(this).data('idvalidation'));
        let idannonce=($(this).data('idannonce'));
        $('#agent1').val(agent1);
        $('#loc1').val(loc1);
        $('#agent2').val(agent2);
        $('#loc2').val(loc2);
        $('#idvalidation').val(idvalidation);
        $('#idannonce').val(idannonce);
    })
    
    $('#saveValid').click(function()
    {
        let idval=$('#idvalidation').val();
        let idannonce=$('#idannonce').val();
        let iduser=$('#iduser').val();
        $.get('scripts/validpermutation.php',{idval:idval,idannonce:idannonce,iduser:iduser},function()
        {
            window.location.reload();
        })
    })
    $('#confirmDelete').click(function()
    {
        // let ideco=$('#id').val();
        // console.log(ideco);
        let idecole=$('#idtodelete').val();
        $.get('scripts/supprimerecole.php',{id:idecole},function()
        {
            // window.location.reload();
        })
    })
    $('.deleted').click(function()
    {
        window.location.reload();
    })
</script>