<?php
    require("inc/config.php");
    $Page="log";
    $PageTitle=SITENAME." - Connexion";

	if(isset($_POST['login']) AND isset($_POST['password'])) 
	{
		$login= htmlspecialchars($_POST['login']); 
		$password= htmlspecialchars($_POST['password']);
		if(isset($_POST['remember']))
			$remember_me = htmlspecialchars($_POST['remember']);
		else
			$remember_me=false;
		if(!class_exists("Database"))
			require 'class/database.php';

		$reponse=Database::SelectQuery("select * from agent where MatriculeAgent='".$login."'");

		//
		if(count($reponse)>0)
		{
			//Login correcte, verifie si le mot de passe saisi correspond a celle de la base de donnees
			$isPasswordCorrect = password_verify($_POST['password'], $reponse[0]->PasswordAgent);
			if ($isPasswordCorrect) 
			{
				//On sauvegarde les info en session
				$date=date("Y-m-d").' '.date("G:i:s");
				$_SESSION['auth']["status"] = true;
				$_SESSION['auth']["user"] = $reponse[0];
				header("location:admin/dashboard.php");
			}
			else 
			{
				$ErrMsg="Mot de passe incorrect.";
				$ErrPage="log1";
				// echo 'Mauvais mot de passe ! <a href="login.php">Cliquer ici pour revenir a la page de connexion.</a>';
			}


			//Le mot de passe correcte est celui qui a ete retourne par la base de donnees dans l'objet $reponse[0]->password

		}
		else
		{
			$ErrMsg="Matricule non reconnu.";
			$ErrPage="log1";
			// echo 'Mauvais identifiant! <a href="index.php">Cliquer ici pour revenir a la page de connexion.</a>';
		}
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
        <link rel="icon" type="image/png" href="assets/img/logo1.jpg">
    </head>

    <body>
        
        <?php require("inc/preloader.php");?>

        <!-- Start Navbar Area -->
        <?php require("inc/header.php");?>
        <!-- End Navbar Area -->

        <?php require("inc/banniere.php");?>

        <!-- Brand Area -->
        <div class="brand-area brand-bg ptb-100">
            <div class="container">
                <div class="brand-slider owl-carousel owl-theme">
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets\img\accueil img\image9.jpg" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/inner-banner/im6.jpg" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/inner-banner/im2.jpg" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets\img\accueil img\image7.jpg" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets\img\accueil img\image8.jpg" alt="Brand Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->

        <!-- About Area -->

        <!-- About Area End -->
        
        <!-- Service Area -->
        <!--section class="service-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    <span>Our Service</span>
                    <h2>We Provide Fastest & Unique Business Growing Service</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by 
                        the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/1.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>SEO Optimization</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/2.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Social Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/3.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Content Marketing</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/4.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Analytical Analysis</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/5.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>App Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="service-card">
                            <a href="service-details.php">
                                <img src="assets/img/service-icon/6.png" alt="Images">
                            </a>
                            <a href="service-details.php">
                                <h3>Web Development</h3>
                            </a>
                            <p>
                                It is a long established fact that area
                                der will be distracted by the reada
                                ble content of a page when looking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section-->
        <!-- Service Area End -->

        <!-- Faq Area -->
        <!-- Faq Area End -->

        <!-- Portfolio Area -->
        
        <!-- Portfolio Area End -->

        <!-- Submission Area -->
        <!-- Submission Area End -->

        <!-- Price Area -->
        <div class="price-area pt-100 pb-70">
            <div class="container">
                <div id="prices-content">
                    <div id="monthly" class="active prices-content-area animated">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <div class="single-price-title">
                                        <h2>Description de l'Application</h2>
                                    </div>
                                    <p>
                                    Dans un soucis de simplifier vos procédures de permutations et de mutations, le ministère de l’éducation nationale met à votre disposition cette plateforme qui vous vous permettra de réaliser votre demande sans vous déplacer.
                                    </p>
                                   
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                        
                                    <div class="single-price-title">
                                        <h2>Condition de Permutation</h2>
                                    </div>
                                    <p>Pour être éligible à une demande de permutation, l’agent demandeur doit au préalable s’accorder avec un autre personnel, ayant la même fonction que lui et qui souhaite venir dans la localité de celui-ci et lui, aller dans la localité de ce dernier
                                    </p>
                                    
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <div class="single-price-title">
                                        <h2>Condition de Mutation</h2>
                                    </div>
                                    <p>Pour être éligible à une demande de mutation, il faut avoir passé, dans la localité d’origine, 
au moins 5 ans après la prise de service pour les agents non mariés et au moins 3 ans après la 
prise de service pour les agents mariés.
                                    </p>
        
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="yearly" class="animated prices-content-area">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li class="color-gray">SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li class="color-gray">Content Marketing</li>
                                        <li class="color-gray">Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Data Analysis</li>
                                        <li>Website Building</li>
                                        <li>Web Application</li>
                                        <li>SEO Optimizing</li>
                                        <li>Content Marketing</li>
                                        <li>Social Marketing</li>
                                    </ul>
                                    <a href="#" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->
          <!-- Counter Area -->
          <div class="counter-area pt-100 pb-70">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-success'></i>
                        <h3><span class="counter">100</span></h3>
                        <p>Inscrits</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-launch'></i>
                        <h3><span class="counter">900</span></h3>
                        <p>Permutations</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-customer'></i>
                        <h3><span class="counter">900</span></h3>
                        <p>Mutations</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-3">
                    <div class="single-counter">
                        <i class='flaticon-team-building'></i>
                        <h3><span class="counter">5</span></h3>
                        <p>Membres D'equipes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Area End -->

        <!-- Member Area -->
        <section class="portfolio-area pt-100 pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    
                    <h2>Notre Equipes</h2>
                   
                </div>
                <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 1.jpg" alt="Portfolio Images">
                            </a>
                            
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Kadjo Anthe</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 2.jpg" alt="Portfolio Images">
                            </a>
                            
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Coulibaly Tiemoko</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 5.jpg" alt="Portfolio Images">
                            </a>
                           
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Djiman Anderson</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 5.jpg" alt="Portfolio Images">
                            </a>
                           
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>KOUAO AKOUA</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 4.jpg" alt="Portfolio Images">
                            </a>
                           
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Konan Fulgence</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <a href="portfolio.php">
                                <img src="assets\img\avatar 3.png" alt="Portfolio Images">
                            </a>
                           
                            <div class="portfolio-content">
                                <a href="portfolio.php"><h3>Bechie Maotto</h3></a>
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Member Area End -->
      

        <!-- Blog Area -->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="scetion-title text-center">
                    
                    <h2>Nos Dernieres Annonces</h2>
                </div>
                <div class="row pt-45">
                   


<!-- LISTE DES ANNONCES DE PERMUTATIONS -->
<?php 
                        $annonces=Database::SelectQuery("SELECT * FROM annonce ORDER BY DateAjoutAnnonce ASC LIMIT 3");
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
                                        <tr><td>Origine : <?=$annonce->LocaliteOrigineAnnonce?></td></tr>
                                        <tr><td>Localité souhaitée : <?=$annonce->LocaliteDesireeAnnonce?></td></tr>
                                </tbody>
                                </table>
                                </div>
                                <a href="annonce_details.php?annonce=<?=$annonce->IdAnnonce?>" class="btn btn-primary" style="align:center">Adhérer</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- FIN DE LA LISTE DES ANNONCES DE PERMUTATIONS -->




                   

                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <?php require "inc//footer.php"?>

    </body>
</html>