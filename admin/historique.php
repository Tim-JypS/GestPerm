<?php 
    session_start();
    if (!isset($_SESSION['auth']["user"]->IdAgent)) 
    header('location:index.php');
?>
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
                        <a class="link-fx" href="">Permutations</a>
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
            <h3 class="block-title">Liste des permutations <small</small></h3>
            <?php $encours=Database::SelectQuery("SELECT COUNT(*) as Nbre FROM annonce WHERE (IdAgent='".$IdAgent."' OR AdherantAnnonce='".$IdAgent."') AND StatutAnnonce<>'VA'")[0]->Nbre; if($TypeUser==1 && $encours==0) :?>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <button type="button" class="btn btn-outline-primary push" data-toggle="modal" data-target="#add-newdr-modal">Ajouter</button>
                        <!-- <a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#modal-block-popout"></a> -->
                    </li>
                </ol>
            </nav>
            <?php endif;?>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table id="example" class="table table-bordered table-striped table-vcenter nowrap"  style="width:100%">
                <thead>
                    <tr>
                        <?php if($TypeUser==1) :?>
                            <th class="text-center">Date</th>
                            <th class="d-none d-sm-table-cell">Localité d'origine</th>
                            <th class="d-none d-sm-table-cell">Localité désirée</th>
                            <th class="d-none d-sm-table-cell">Permutant</th>
                            <th class="d-none d-sm-table-cell">Statut</th>
                            <th class="d-none d-sm-table-cell">Actions</th>
                        <?php else:?>
                            <th class="d-none d-sm-table-cell">Date</th>
                            <th class="d-none d-sm-table-cell">Matricule Demandeur</th>
                            <th class="d-none d-sm-table-cell">Nom Demandeur</th>
                            <th class="d-none d-sm-table-cell">Fonction</th>
                            <th class="d-none d-sm-table-cell">Localité d'origine</th>
                            <th class="d-none d-sm-table-cell">Localité désirée</th>
                            <th class="d-none d-sm-table-cell">Matricule Adhérent</th>
                            <th class="d-none d-sm-table-cell">Nom Adhérent</th>
                            <th class="d-none d-sm-table-cell">Statut</th>
                            <th class="d-none d-sm-table-cell">Actions</th>
                        <?php endif?>
                    </tr>
                </thead>
                <tbody>

                    <?php if($TypeUser==1) :
                         $annonces=Database::SelectQuery("SELECT * FROM annonce WHERE IdAgent='".$IdAgent."' OR AdherantAnnonce='".$IdAgent."' ORDER BY DateAjoutAnnonce DESC");
                         foreach($annonces as $annonce):
                            ?>
                        <tr>
                            <td class="text-center font-size-sm"><?=$annonce->DateAjoutAnnonce?></td>
                            <td class="font-w600 font-size-sm">
                                <?php
                                $codeZone=($IdAgent==$annonce->AdherantAnnonce)?($annonce->LocaliteDesireeAnnonce):($annonce->LocaliteOrigineAnnonce);
                                $query="SELECT LibelleZone FROM localite WHERE CodeZone='".$codeZone."'";
                                echo Database::SelectQuery($query)[0]->LibelleZone ?>
                            </td>
                            <td class="font-w600 font-size-sm">
                                <?php
                                $codeZone=($IdAgent==$annonce->AdherantAnnonce)?$annonce->LocaliteOrigineAnnonce:$annonce->LocaliteDesireeAnnonce;
                                $query="SELECT LibelleZone FROM localite WHERE CodeZone='".$codeZone."'";
                                echo Database::SelectQuery("SELECT LibelleZone FROM localite WHERE CodeZone='".$codeZone."'")[0]->LibelleZone ?></td>
                            <td class="font-w600 font-size-sm">
                                <?php 
                                    if($annonce->AdherantAnnonce==-1)
                                    {
                                        echo "";
                                    }
                                    else
                                    {
                                        $CodeAgent=($IdAgent==$annonce->AdherantAnnonce)?($annonce->IdAgent):($annonce->AdherantAnnonce);
                                        $adherant=Database::SelectQuery("SELECT MatriculeAgent, CONCAT(NomAgent,' ',PrenomsAgent) as NomPrens FROM agent WHERE IdAgent='".$CodeAgent."'");
                                        echo($adherant[0]->MatriculeAgent." <br />".$adherant[0]->NomPrens);
                                    }
                                    ?>
                            </td>
                            <td class="font-w600 font-size-sm">
                            <?php 
                                if($annonce->StatutAnnonce=="VA0")
                                {
                                    echo "Attente (Adhérant)";
                                }
                                elseif($annonce->StatutAnnonce=="VA1")
                                {
                                    echo "Attente (Insp. 1)";
                                }
                                elseif($annonce->StatutAnnonce=="VA2")
                                {
                                    echo "Attente (DREN 1)";
                                }
                                elseif($annonce->StatutAnnonce=="VA3")
                                {
                                    echo "Attente (Insp. 2)";
                                }
                                elseif($annonce->StatutAnnonce=="VA4")
                                {
                                    echo "Attente (DREN 2)";
                                }
                                elseif($annonce->StatutAnnonce=="VA5")
                                {
                                    echo "Attente (DRH)";
                                }
                                elseif($annonce->StatutAnnonce=="VA")
                                {
                                    echo "Validée";
                                }
                                elseif($annonce->StatutAnnonce=="AN")
                                {
                                    echo "Refusée";
                                }
                            ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#Edit-newinsp-modal">
                                        <a href="print/index.php?fiche=<?=$annonce->IdAnnonce?>" target="_blank"><i id="print" data-values="" class="fa fa-2x fa-print" data-toggle="tooltip" title="Imprimer"></i></a>
                                    </button>
                                    <?php if($annonce->StatutAnnonce!="VA" && $annonce->StatutAnnonce!="AN"):?>
                                    <button type="button" class="btn btn-sm btn-alt-primary"  data-toggle="modal" data-target="#Delete-newdr-modal" title="Annuler">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button> <?php endif ?>
                                </div>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        else:
                            $annonces=Database::SelectQuery("SELECT v.StatutValidation,v.DateValidation, a.* FROM annonce a, validationannonce v WHERE a.IdAnnonce=v.IdAnnonce AND v.ValideurValidation='".$IdAgent."' AND StatutValidation<>'EN' AND DateValidation IS NOT NULL ORDER BY v.DateValidation DESC");
                            foreach($annonces as $annonce):
                                $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");
                                $agent2=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->AdherantAnnonce'");?>
                            <tr>
                                <?php $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");?>
                                <?php $agent2=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->AdherantAnnonce'");?>
                                <td class="font-w600 font-size-sm"><?=$annonce->DateValidation?></td>
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
                                <td class="font-w600 font-size-sm">
                                <?php 
                                    if($annonce->StatutValidation=="VA")
                                    {
                                        echo "Validée";
                                    }
                                    elseif($annonce->StatutValidation=="AN")
                                    {
                                        echo "Refusée";
                                    }
                                ?>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-primary">
                                            <a href="print/index.php?fiche=<?=$annonce->IdAnnonce?>" target="_blank"><i id="print" data-values="" class="fa fa-2x fa-print" data-toggle="tooltip" title="Imprimer"></i></a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach?>
                        <?php endif?>
                        <!-- <td>
                            <em class="text-muted font-size-sm"><?php //echo rand(2, 10); ?> days ago</em>
                        </td> -->
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
                        <h3 class="block-title">Nouvelle Permutation</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="block-content font-size-sm">
                    <?php /*$one->get_text('small', 2);*/ ?>
                    <form>

                        <div class="form-group form-row">
                            <div class="col-12">
                                <label for="LocaliteDesireeAnnonce">Type d'annonce</label>
                                <select class="custom-select my-1 mr-sm-2" id="TypeAnnonce" name="TypeAnnonce">
                                    <option selected>Votre Choix...</option>
                                    <option value="1">Permutation</option>
                                    <option value="2">Mutation</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group form-row">
                        <div class="col-12">
                                <!-- <label for="LocaliteDesireeAnnonce">Choisir la localité désirée</label> -->
                                <select class="js-select2 form-control" id="LocaliteDesiree" name="LocaliteDesiree" style="width: 54em;" data-placeholder="Choisir la localité désirée">
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

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        Localité origine
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="LocaliteOrigineAnnonce" name="LocaliteOrigineAnnonce" disabled="disabled" value="<?=$LocaliteOrigine?>">
                                <input style="display: none;" type="text" class="form-control" id="LocaliteOrigine"  disabled="disabled" value="<?=$IdLocaliteOrigine?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        ID Agent
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="MatAgent" name="MatAgent" disabled="disabled" value="<?=$MatAgent?>">
                                <input style="display: none;" type="text" class="form-control" id="IdAgent" name="IdAgent" disabled="disabled" value="<?=$IdAgent?>">
                            </div>
                        </div>
                    </form>
                        <?php if($ErrPage=="nosign" && !empty($ErrMsg)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <p class="mb-0"><?=$ErrMsg?></p>
                            </div>
                            </div>
                        <?php endif ?>
                    </div>
                    
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <?php if($ErrPage=="nosign" && empty($ErrMsg)): ?>
                        <button type="button" class="btn btn-primary" id="save">Enregistrer</button>
                        <?php endif ?>
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
                        <h3 class="block-title">Modification de la permutation</h3>
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
                        
                    </form>
                    </div>

                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" id="btnSubmit">Modifier Permutation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Large Block Modal -->
    <!--Fin Edit modal-->

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


<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            "scrollY": 200,
            "scrollX": true
        } );
    } );
    $('#save').click(function()
    {
        let type=$('#TypeAnnonce').val();
        let idagent=$('#IdAgent').val();
        let locorigine=$('#LocaliteOrigine').val();
        let locdesiree=$('#LocaliteDesiree').val();
        $.get('scripts/addannonce.php',{type:type,idagent:idagent,locdesiree:locdesiree,locorigine:locorigine},function()
        {
            window.location.reload();
        })
    })
</script>