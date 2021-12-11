<?php
    require("inc/config.php");
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
                <div class="scetion-title text-center">
                    <!-- <span>Our Portfolio</span> -->
                    <h2>Demande de permutations</h2>
                    <!--<p>
                        It is a long established fact that a reader will be distracted 
                        by the readable content of a page when looking at its layout.
                    </p>-->
                </div>
                <div class="row pt-45">
                    

                    <!-- LISTE DES ANNONCES DE PERMUTATIONS -->
                    <?php 
                        $annonces=Database::SelectQuery("SELECT * FROM annonce ORDER BY DateAjoutAnnonce DESC");
                        foreach($annonces as $annonce):
                    ?>
                                
                    <div class="col-lg-4 col-sm-6">
                        <div class="card" style=" margin:10px">
                            <div class="card-body">
                                <h5 class="card-title">Permutation</h5>
                                <div class="card-text">
                                <table class="table">
                                <tbody>
                                        <tr scope="row">
                                            <td>DRENA : 
                                            <?php 
                                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");
                                                    $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                                    $dren=DataBase::SelectQuery("SELECT * FROM directionregionale WHERE IdDirectionRegionale='".$inspection[0]->IdDirectionRegionale."'");
                                                    echo $dren[0]->NomDirectionRegionale;
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Inspection : 
                                                <?php 
                                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");
                                                    $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                                    $inspection=DataBase::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$ecole[0]->IdInspection."'");
                                                    echo $inspection[0]->NomInspection;
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Type école : 
                                                <?php 
                                                    $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");
                                                    $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                                    //$typeEcole=DataBase::SelectQuery("SELECT * FROM typeecole WHERE IdTypeEcole='".$ecole[0]->IdTypeEcole."'");
                                                    echo $ecole[0]->TypeEcole;
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Etab. :
                                            <?php 
                                                
                                                $agent=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$annonce->IdAgent'");
                                                $ecole=DataBase::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$agent[0]->IdEcole."'");
                                                echo $ecole[0]->NomEcole;
                                            ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Origine : 
                                                <?php 
                                                    $localite=DataBase::SelectQuery("SELECT * FROM localite WHERE CodeZone='$annonce->LocaliteOrigineAnnonce'");
                                                    echo $localite[0]->LibelleZone;
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Localité souhaitée : 
                                                <?php 
                                                    $localite=DataBase::SelectQuery("SELECT * FROM localite WHERE CodeZone='$annonce->LocaliteDesireeAnnonce'");
                                                    echo $localite[0]->LibelleZone;
                                                ?>
                                            </td>
                                        </tr>
                                </tbody>
                                </table>
                                </div>
                                <a href="annonce_details.php?annonce=<?=$annonce->IdAnnonce?>" class="btn btn-primary" style="align:center">Adhérer</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- FIN DE LA LISTE DES ANNONCES DE PERMUTATIONS -->

                    <div class="col-lg-12">
						<div class="pagination-area">
							<nav aria-label="Page navigation example text-center">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link page-links" href="#">
											<i class='bx bx-chevrons-left'></i>
										</a>
									</li>
									<li class="page-item current">
										<a class="page-link" href="#">1</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">2</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">3</a>
									</li>
									<li class="page-item">
										<a class="page-link" href="#">
											<i class='bx bx-chevrons-right'></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
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