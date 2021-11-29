<?php
    require("inc\config.php");
    $Page="log";
    $PageTitle=SITENAME." - Connexion";
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

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-70">
			<div class="container">
				<?php /*<div class="scetion-title text-center">
					<h2>Sign In to your account!</h2>
					<p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
				</div> */?>
				<div class="contact-wrap-form log-in-width">
					<form method="post">
                    <?php /*<!-- <p>with your social network</p> */?>
						<div class="row">
							<?php /*<!-- <div class="col-lg-4 col-md-4 col-sm-4">
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
							</div> */ ?>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Mot de passe">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										Se souvenir de moi
									</label>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<a class="forget" href="recover-password.php">Mot de passe oublié?</a>
							</div>

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Se connecter
								</button>
							</div>

							<div class="col-12">
								<p class="account-desc">
									Pas de compte?
									<a href="register.php">Créer un compte</a>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End Sign In Area -->

        <?php require "inc\\footer.php"?>


    </body>
</html>