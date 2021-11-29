<?php
    require("inc\config.php");
    $Page="reg";
    $PageTitle=SITENAME." - Nouveau compte";
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

        <!-- Start Sign Up Area -->
		<section class="sign-up-area ptb-70">
			<div class="container">
				<?php /*<div class="scetion-title text-center">
					<h2>Créer votre compte!</h2>
					<p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
				</div>*/?>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
                    <?php /*<p>with your social network</p>*/?>
						<div class="row">
							<?php /*<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-google-plus'></i>
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-facebook'></i>
								</button>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-4">
								<button class="login-social-btn" type="submit">
									<i class='bx bxl-twitter' ></i>
								</button>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Username">
								</div>
                            </div>*/?>
                            
                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="name" placeholder="Nom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="prenom" placeholder="Prénom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="name" placeholder="Nom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="name" placeholder="Nom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="name" placeholder="Nom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="name" name="name" placeholder="Nom">
								</div>
							</div>

                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="email" name="name" placeholder="Email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Mot de passe">
								</div>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Créer votre compte
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Avez-vous déjà un compte? 
									<a href="login.php">Connectez-vous</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->

       <?php require "inc\\footer.php"?>

    </body>
</html>