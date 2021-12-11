<?php
    require("inc/config.php");
    require("admin/fonctions/annonces_controller.php");
    require("admin/fonctions/connexion.php");
    $Page="ann";
    $PageTitle="GestPerm - Annonces";
    $Mode="aff";
    $annonces = "";
    $get_nombre_annonce = "";
    if(isset($_POST) && !empty($_POST["recherche"])){
        $Mode="rech";
        $recherche = htmlspecialchars($_POST["recherche"]);
    }else{
        $Mode="aff";
    }
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

        <!-- Annonces Area -->
        <section class="portfolio-area service-area pt-70 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <!-- <span>Our Portfolio</span> 
                    <h2>Demandes de permutation en cours</h2>
                    <p>
                        Intégrer une demande de permutation en cours grâce à une recherche sur la localité souhaitée.
                    </p>-->
                </div>
                <div class="contact-section">
                    <div class="container">
                        <div class="contact-wrap-form">
                            <form class="submission-form" action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group border-line">
                                            <input type="text" class="form-control" name="recherche" id="recherche" placeholder="Rechercher une permutation">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3 offset-md-5 offset-lg-0">
                                        <!--<a href="annonces.php?rech=<?php //echo $action["action_id"]; ?>" class="default-btn">Rechercher</a>-->
                                        <button type="submit" class="default-btn">Rechercher</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="row pt-45">
<?php
    if($Mode==="aff"){
        $get_nombre_annonce = select_all_annonces_non_adhere();
    }elseif($Mode==="rech"){
        $get_nombre_annonce = count_search_annonce($recherche);
    }else{
        $get_nombre_annonce = select_all_annonces_non_adhere();
    }

    //LISTE DES ANNONCES LIBRE
	    	
        $get_nombre_annonce = $get_nombre_annonce;
		$nombre_annonce = $get_nombre_annonce->fetch();
		$nbre_annonce = $nombre_annonce["nombre_annonces"];
		$get_nombre_annonce->closeCursor();

		$perPage = 6;
		$nbPage = ceil($nbre_annonce/$perPage);

		if(isset($_GET["p"]) && $_GET["p"]>0 && $_GET["p"]<= $nbPage){
			$cPage = $_GET["p"];
		}else{
			$cPage = 1;
		}

        if($Mode==="aff"){
            $annonces = select_all_annonces_perPage($cPage,$perPage);
        }elseif($Mode==="rech"){
            $annonces = search_annonce($recherche,$cPage,$perPage);
        }else{
            $annonces = select_all_annonces_perPage($cPage,$perPage);
        }
        //RECUPERATION DES ANNONCES
		$annonces = $annonces;
		if($annonces->fetch()){
            while($annonce = $annonces->fetch()){
                
?>
                <!-- ListAnnonces Area -->
               
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/1.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                            
                            </a>
                            <p>
                            <?php echo $annonce["DescriptionAnnonce"]; ?>
                                <?php
                                    //RECUPERATION DU TYPE D'ANNONCE
					                $get_typeAnnonce = edit_type_annonce($annonce["IdTypeAnnonce"]);
					                $typeAnnonce = $get_typeAnnonce->fetch();
                                    echo'<h3>'.$typeAnnonce["NomTypeAnnonce"].'</h3>';
                                    $get_typeAnnonce->closeCursor();
                                ?>
                            </p>
                            <!--<div class="portfolio-tag">
                                    <a href="#"><span>Optimizing</span></a>
                            </div>-->
                            <div class="portfolio-content">
                                    <a href="#" class="default-btn"><h3>Adhérer</h3></a>
                                    
                            </div>
                        </div>
                    </div>
<?php
                }
                $annonces->closeCursor();
?>
                               
                    <!-- Pagination Area -->
                    <div class="col-lg-12">
						<div class="pagination-area">
							<nav aria-label="Page navigation example text-center">
                                <ul class="pagination">
                                    <?php 
                                        for($i=1;$i<=$nbPage;$i++){
                                            if($i==1 and $i==$cPage){
                                                echo '<li class="disabled page-item"><a href="#" class="page-link page-links"><i class="bx bx-chevrons-left"></i></a></li>';
                                            }elseif($i==1 and $i<$cPage){
                                                echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.($cPage-1).'">«</a></li>';
                                            } 
                                            if($i==$cPage){
                                                echo '<li class="current page-item"><a class="page-link" href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
                                            }else{
                                                echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.$i.'">'.$i.'</a></li>';
                                            }
                                            if($i==$nbPage and $cPage != $nbPage) echo '<li class="page-item"><a class="page-link" href="annonces.php?p='.($cPage+1).'"><i class="bx bx-chevrons-right"></i></a></li>'; elseif($i==$nbPage) echo '<li class="disabled page-item"><a class="page-link" href="#"><i class="bx bx-chevrons-right"></i></a></li>';
                                        }
                                    ?>
                                </ul>
							</nav>
						</div>
					</div>
    
                    <?php
   }else{
    echo '<div>Aucune annonce disponible pour le moment.</div>';
}
?>
                </div>
                <!-- /ListAnnonces Area -->
<?php

?>
            </div>
        </section>
        

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