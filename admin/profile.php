<?php 
session_start();
if (!isset($_SESSION['auth']["user"]->IdAgent)) 
header('location:index.php');
?>
<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<?php if(!class_exists("Database"))
	require '../class/database.php';
?>
<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/select2/css/select2.min.css'); ?>
<!-- Page JS Plugins CSS -->
<?php $one->get_css('js/plugins/sweetalert2/sweetalert2.min.css'); ?>
<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo $one->assets_folder; ?>/media/photos/photo8@2x.jpg');">
    <div class="bg-black-50">
        <div class="content content-full text-center">
            <div class="my-3">
            <?php 
                $IdAgent = $_SESSION['auth']['user']->IdAgent;
                $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$IdAgent'");
                if($agent1["0"]->photoAgent){
            ?>
                <img class="img-avatar img-avatar-thumb" src="<?php echo "upload/avatar/".$agent1["0"]->photoAgent;?>" alt="">
            <?php } else $one->get_avatar(13, '', false, true); ?>
            </div>
            <h1 class="h2 text-white mb-0"><?php echo $_SESSION['auth']["user"]->NomAgent.' '.$_SESSION['auth']["user"]->PrenomsAgent; ?></h1>
            <span class="text-white-75">
            <?php 
                echo $LibFonctionUser;
            ?>
            </span>
            <div></div>
            <a class="btn btn-light" href="profile_edit.php">
                <i class="fa fa-pencil-alt text-danger"></i> Modifier mon profil
            </a>
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
                <a class="link-fx font-size-h3" href="historique.php">
                <?php 
					$nombreAnnonce=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombreAnnonce FROM annonce WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
					echo $nombreAnnonce[0]->nombreAnnonce;
				?>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Demande en cours</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">
                <?php 
					$nombreAnnonce=DataBase::SelectQuery("SELECT COUNT(IdAnnonce) as nombreAnnonce FROM annonce WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
					echo $nombreAnnonce[0]->nombreAnnonce;
				?>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Messages</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">
                <?php 
					$nombreMessage=DataBase::SelectQuery("SELECT COUNT(IdMessage) as nombreMessage FROM message WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
					echo $nombreMessage[0]->nombreMessage;
				?>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase">Notifications</div>
                <a class="link-fx font-size-h3" href="javascript:void(0)">
                <?php 
					$nombreNotification=DataBase::SelectQuery("SELECT COUNT(IdNotification) as nombreNotification FROM notification WHERE LectureNotification=0 AND IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
					echo $nombreNotification[0]->nombreNotification;
				?>
                </a>
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
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->MatriculeAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Civilité</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="Monsieur">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Nom de jeune fille</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->NomJeuneFilleAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-username">Nom</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-username" name="one-profile-edit-username" value="<?php echo $_SESSION['auth']["user"]->NomAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="example-static-input-readonly">Prénom(s)</label>
                            <input type="text" readonly class="form-control" id="example-static-input-readonly" value="<?php echo $_SESSION['auth']["user"]->PrenomsAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Sexe</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?=$_SESSION['auth']["user"]->SexeAgent?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de naissance</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->DateNaissanceAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Situation matrimoniale</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->SituationMatrimonialeAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Téléphone</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->TelAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-email">Email</label>
                            <input type="email" readonly class="form-control" id="one-profile-edit-email" name="one-profile-edit-email" value="<?php echo $_SESSION['auth']["user"]->EmailAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Date de prise de service</label>
                            <input type="text" readonly class="form-control" id="one-profile-edit-name" name="one-profile-edit-name" value="<?php echo $_SESSION['auth']["user"]->DatePriseServiceAgent; ?>">
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Fonction</label>
                            <?php 
									
                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
									if($agent[0]->IdFonction != -1){
                                        $fonction=DataBase::SelectQuery("SELECT * FROM fonction WHERE IdFonction='".$agent[0]->IdFonction."'");
									    echo '<input type="text" class="form-control" disabled="disabled" value="'.$fonction[0]->NomFonction.'">';
                                    }else{
                                        echo '<input type="text" class="form-control" disabled="disabled" value="">';
                                    }
								?>
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Direction régionale</label>
                            <?php 
                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                    $dren=DataBase::SelectQuery("SELECT * FROM directionregionale WHERE IdDirectionRegionale='".$inspection[0]->IdDirectionRegionale."'");
                                    echo '<input type="text" class="form-control" id="IdAgent" name="IdAgent" disabled="disabled" value="'.$dren[0]->NomDirectionRegionale.'">';
                                ?>
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Inspection</label>
                            <?php 
                                	$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
                                    $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                    echo '<input type="text" class="form-control" disabled="disabled" value="'.$inspection[0]->NomInspection.'">';
                                ?>
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Type Etablissement</label>
                            <?php 
									$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$ecole[0]->TypeEcole.'">';
								?>
                        </div>
                        <div class="form-group">
                            <label for="one-profile-edit-name">Etablissement</label>
                            <?php 
									$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$_SESSION['auth']["user"]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$ecole[0]->NomEcole.'">';
								?>
                        </div>
                        
                    </div>
                </div>
                        
                    </div>
                </div>
            </form>





                </div>

                <div class="col-md-5 col-xl-4">
            <!-- Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        <i class="fa fa-briefcase text-muted mr-1"></i> Stats
                    </h3>
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
                                <?php
                                        $niveauInfosPerso = 0;
                                        if($agent[0]->NomAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->NomJeuneFilleAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->SexeAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->DateNaissanceAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->TelAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->EmailAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->SituationMatrimonialeAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }
                                        if($agent[0]->photoAgent){ $niveauInfosPerso = $niveauInfosPerso + 12.5; }

                                        if($niveauInfosPerso < 50){
                                            echo '<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">25%</span>
                                        </div>';
                                        }elseif($niveauInfosPerso >= 75){
                                            echo '<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">75%</span>
                                        </div>';
                                        }elseif($niveauInfosPerso == 100){
                                            echo '<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">100%</span>
                                        </div>';
                                        }

                                    ?>
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
                                    <?php
                                        $niveauInfosPro = 0;
                                        if($agent[0]->MatriculeAgent){ $niveauInfosPro = $niveauInfosPro + 25; }
                                        if($agent[0]->DatePriseServiceAgent){ $niveauInfosPro = $niveauInfosPro + 25; }
                                        if($agent[0]->IdFonction >= 1){ $niveauInfosPro = $niveauInfosPro + 25; }
                                        if($agent[0]->IdEcole >= 1){ $niveauInfosPro = $niveauInfosPro + 25; }

                                        if($niveauInfosPro < 50){
                                            echo '<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">25%</span>
                                        </div>';
                                        }elseif($niveauInfosPro == 75){
                                            echo '<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">75%</span>
                                        </div>';
                                        }elseif($niveauInfosPro == 100){
                                            echo '<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span class="font-size-sm font-w600">100%</span>
                                        </div>';
                                        }

                                    ?>
                                
                                    
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
                                    <?php
                                        if($agent[0]->signatureAgent){
                                            echo '<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="font-size-sm font-w600">100%</span>
                                                </div>';
                                        }else{
                                            echo '<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">
                                                    <span class="font-size-sm font-w600">0%</span>
                                                </div>';
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Products -->
        </div>

            </div>
            <!-- END Ratings -->


            <!-- END Updates -->
        </div>
        
                                   
        
    </div>
</div>
<!-- END Page Content -->
<?php $one->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/select2/js/select2.full.min.js'); ?>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ One.helpers('select2'); });</script>

