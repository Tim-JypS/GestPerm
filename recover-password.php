<?php
	require("inc/config.php");
    $Page="log";
    $PageTitle="GestPerm - Réinitialiser mot de passe";
    if(isset($_SESSION['auth']["status"]) && $_SESSION['auth']["status"])
    {
		header("location:admin/dashboard.php");
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

        <!-- Start Sign Up Area -->
		<section class="sing-up-area ptb-100">
			<div class="container">
				<div class="scetion-title text-center">
                    <?php /*<span>Reset Password</span>
					<h2>Réinitialiser votre mot de passe!</h2>*/?>
					<p>
                        Entrer votre email pour réinitialiser votre mot de passe. Si vous rencontrez 
                        n'importe quelles difficultés, <a href="contact.php">contactez-nous.</a> 
                    </p>
				</div>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
						<div class="row">
                            
                            <div class="col-12">
								<div class="form-group">
									<input class="form-control" type="email" name="name" placeholder="Votre Email">
								</div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">
								<a class="recover-login" href="login.php">Connectez-vous</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<p class="recover-register">
                                    Pas de compte?
									<a href="register.php">Créer un compte</a>
								</p>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Réinitialiser
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign Up Area -->

        <?php require "inc/footer.php"?>
        
    </body>
</html>