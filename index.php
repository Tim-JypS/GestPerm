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
                            <img src="assets/img/inner-banner/im7.jpg" alt="Brand Images">
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
                            <img src="assets/img/brand/tel2.jpg" alt="Brand Images">
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img src="assets/img/brand/tel4.jpg" alt="Brand Images">
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
                <div class="scetion-title text-center">
                    
                    <h2>Table</h2>
                </div>

                <div id="prices-content">
                    <div id="monthly" class="active prices-content-area animated">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                
                                    <div class="single-price-title">
                                        <h2>Description</h2>
                                    </div>
                                    <p>
                                    Dans notre societe,nombreux sont ces institeurs qui font plusieurs procedures
                                    et des allez et retour dans les differents DREN pour faire une demande Permutations
                                    d'une ville a une autre.
                                    Gestperm a ete mis en place a fin de faciliter la taches a nos braves instituteurs
                                    qui desirent permutter dans les differentes villes et localités de notre pays.
                                    </p>
                                    <a href="#" class="get-btn">Voir Plus</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                        
                                    <div class="single-price-title">
                                        <h2>Condition de Permutation</h2>
                                    </div>
                                    <p>Pour etre éligible a une demande de permutation,il vous faut:
                                    -Etre un instituteur deja en fonction dans une villes
                                    -.......
                                    -......
                                    -.......
                                    -.......
                                    -.........
                                    -..........
                                    -..........
                                    -............
                                    -.............
                                    </p>
                                    <a href="#" class="get-btn">Voir Plus</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-price">
                                    <div class="single-price-title">
                                        <h2>Condition de Mutation</h2>
                                    </div>
                                    <p>Pour etre éligible a une demande de permutation,il vous faut:
                                    -Etre un instituteur deja en fonction dans une villes
                                    -.......
                                    -......
                                    -.......
                                    -.......
                                    -.........
                                    -..........
                                    -..........
                                    -............
                                    -.............

                                    </p>
                                    <a href="#" class="get-btn">Voir Plus</a>
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
                                <img src="assets/img/portfolio/1.jpg" alt="Portfolio Images">
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
                                <img src="assets/img/portfolio/2.jpg" alt="Portfolio Images">
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
                                <img src="assets/img/portfolio/3.jpg" alt="Portfolio Images">
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
                                <img src="assets/img/portfolio/5.jpg" alt="Portfolio Images">
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
                                <img src="assets/img/portfolio/5.jpg" alt="Portfolio Images">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/1.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.php">
                                    <h3>Monsieur Gueude desire permutter avec un enseignant
                                        dans la ville d'Aboisso
                                    </h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Voir Plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/2.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.php">
                                    <h3>Madamme Kouakou desire permutter avec un enseignant
                                        dans la ville Akoupe
                                    </h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Voir Plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="blog-details.php">
                                    <img src="assets/img/blog/3.jpg" alt="Blog Images">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="blog-details.php">
                                    <h3>Monsieur Yapo desire permutter avec un enseignant
                                        dans la ville d'Abengourou
                                    </h3>
                                </a>
                                <a href="blog-details.php" class="read-btn">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

        <?php require "inc//footer.php"?>

    </body>
</html>