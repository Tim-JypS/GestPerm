<?php
    if(!isset($_GET["annonce"]) && (!preg_match('#([0-9]+)#',$_GET["annonce"])) AND (!is_numeric($_GET["annonce"])))
	header('location:annonces.php');
	$get_annonce = htmlspecialchars(htmlentities($_GET["annonce"]));
	require("inc/config.php");
	$annonce=DataBase::SelectQuery("SELECT * FROM annonce WHERE IdAnnonce='$get_annonce'");
	if(count($annonce)==0)
	header('location:404.php');

	
    $Page="ann";
    $PageTitle="GestPerm - Annonces";

?>

<!doctype html>
<html lang="fr">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require("inc/links.php");?>
        <!-- Title -->
        <title><?=$PageTitle?></title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>        
    <?php require("inc/preloader.php");?>
    <?php require("inc/header.php");?>
    <?php //require("inc/inner.php");?>

        <!-- Portfolio Area -->
        <section class="portfolio-area pt-70 pb-70">
            <div class="container">
                <div class="scetion-title text-center" >
                    <!-- <span>Our Portfolio</span> -->
                    <h2>Demande de permutation</h2>
                    <!--<p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>-->
                </div>
                <div class="row pt-45">
                   
				<div class="row">
                <div class="col-lg-4">
					<section class="widget widget_categories">
						<h3 class="widget-title">Conditions</h3>
						<div class="post-wrap">
							<ul>
								<li>
									Vous ne pouvez pas adhérer à plus d'une demande en cours.
								</li>
								<li>
									Si vous avez déjà adhérer à une demande de permutation, vous ne pouvez plus adhérer à celle-ci.
								</li>
								<li>
									Si vous avez déjà une demande de permutation en cours, vous ne pouvez plus adhérer à celle-ci.
								</li>		
							</ul>
							</div>
					</section>

                </div>
                <div class="col-lg-8">
                    <!-- Form Labels on top - Default Style -->
                    <form action="admin/scripts/adhererPermutation.php" method="POST" enctype="multipart/form-data" >
						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        DRENA:
                                    </span>
                                </div>
                                
								<?php 
                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$annonce[0]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                    $dren=DataBase::SelectQuery("SELECT * FROM directionregionale WHERE IdDirectionRegionale='".$inspection[0]->IdDirectionRegionale."'");
                                    echo '<input type="text" class="form-control" id="IdAgent" name="IdAgent" disabled="disabled" value="'.$dren[0]->NomDirectionRegionale.'">';
                                ?>
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        INSPECTION:
										
                                    </span>
                                </div>
								<?php 
                                	$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$annonce[0]->IdAgent."'");
                                    $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                    echo '<input type="text" class="form-control" disabled="disabled" value="'.$inspection[0]->NomInspection.'">';
                                ?>
                                
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        TYPE ETABLISSEMENT:
										
                                    </span>
                                </div>
								<?php 
									$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$annonce[0]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$ecole[0]->TypeEcole.'">';
								?>
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        ETABLISSEMENT:
										
                                    </span>
                                </div>
								<?php 
									$agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$annonce[0]->IdAgent."'");
									$ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$ecole[0]->NomEcole.'">';
								?>
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        LOCALITE ORIGINE :
                                    </span>
                                </div>
								<?php 
									$localite=DataBase::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$annonce[0]->LocaliteOrigineAnnonce."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$localite[0]->LibelleZone.'">';
								?>                            
							</div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        LOCALITE DESIREE :
                                    </span>
                                </div>
                                <?php 
									$localite=DataBase::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$annonce[0]->LocaliteDesireeAnnonce."'");
									echo '<input type="text" class="form-control" disabled="disabled" value="'.$localite[0]->LibelleZone.'">';
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        MATRICULE:
                                    </span>
                                </div>
                                <input type="text" class="form-control" disabled="disabled" value="<?=$agent[0]->MatriculeAgent?>">
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        NOM ET PRENOMS:
                                    </span>
                                </div>
                                <input type="text" class="form-control" disabled="disabled" value="<?=$agent[0]->NomAgent?> <?=$agent[0]->PrenomsAgent?>">
                            </div>
                        </div>

						<div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        CONTACT:
                                    </span>
                                </div>
                                <input type="text" class="form-control" disabled="disabled" value="<?=$agent[0]->TelAgent?>">
                                <input type="text" name="permutant" style="display:none;opacity:0;" class="form-control" value="<?=$IdAgent?>">
                                <input type="text" name="annonce" style="display:none;opacity:0;" class="form-control" value="<?=$annonce[0]->IdAnnonce?>">
                            </div>
                        </div>
                        <?php 
                        $idPostulant = $_SESSION['auth']["user"]->IdAgent;
                        $postulant=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$idPostulant."'");
                        //echo 'Agent: '.$idPostulant;
                        $ecolePostulant=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$postulant[0]->IdEcole."'");
                        //echo 'ECOLE: '.$postulant[0]->IdEcole;
                        $localiteEcolePostulant=DataBase::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$ecolePostulant[0]->LocaliteEcole."'");
                        
                        //echo $localiteEcolePostulant[0]->CodeZone;



                        if ($idPostulant!=$annonce[0]->IdAgent && $localiteEcolePostulant[0]->CodeZone == $annonce[0]->LocaliteDesireeAnnonce){
                            ?>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="submit" id="ConfirmPermutant" class="btn btn-primary" id="btnSubmit">Adhérer</button>
                        </div>
                        <?php 
                        }else{
                        ?>
                        <div class="block-content block-content-full text-right border-top">
                            <button type="button"  class="btn btn-primary" id="btnSubmit">Vous ne remplissez pas les conditions pour adhérer</button>
                        </div>
                        <?php }  ?>
                    </form>
                    <!-- END Form Labels on top - Default Style -->

                </div>
            </div>
                    <div class="col-lg-12">
						
					</div>
                </div>
            </div>
        </section>
        <!-- Portfolio Area End -->
        
        <!-- Submission Area -->
        <!-- <div class="submission-area ptb-100">
            <div class="container">
                <div class="submission-title">
                    <h2>Know Your Website Ranking</h2>
                </div>
                <form class="submission-form">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="form-group">
								<input type="text" class="form-control" id="website" placeholder="Your website">
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group border-line">
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
                        </div>
                        <div class="col-lg-3 col-md-3 offset-md-5 offset-lg-0">
                            <button type="submit" class="default-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
        <!-- Submission Area End -->

        <?php require "inc/footer.php"?>
    </body>
</html>


