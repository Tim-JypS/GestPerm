<?php
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

		$reponse=Database::SelectQuery("select * from agent where EmailAgent='".$login."'");

		//
		if(count($reponse)>0)
		{
			//Login correcte, verifie si le mot de passe saisi correspond a celle de la base de donnees
			$isPasswordCorrect = password_verify($_POST['password'], $reponse[0]->PasswordAgent);
			if ($isPasswordCorrect) 
			{
				//On sauvegarde les info en session
				$date=date("Y-m-d").' '.date("G:i:s");
				$_SESSION['auth'] = true;
				$_SESSION['auth']["user"] = $reponse[0];
				header("location:admin/dashbord.php");
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
			$ErrMsg="Email inconnu.";
			$ErrPage="log1";
			// echo 'Mauvais identifiant! <a href="index.php">Cliquer ici pour revenir a la page de connexion.</a>';
		}
	}

    if(isset($_SESSION['auth']) && $_SESSION['auth'])
    {
		header("location:admin/dashboard.php");
    }
    require("inc/config.php");
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
									<input class="form-control" type="email" value="<?php if(isset($login))echo $login; ?>" name="login" required placeholder="Email">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input class="form-control" type="password" name="password" required placeholder="Mot de passe">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1" name="remember">
									<label for="chb1">
										Se souvenir de moi
									</label>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6">
								<a class="forget" href="recover-password.php">Mot de passe oublié?</a>
							</div>

							<?php if($ErrPage=="log1" && !empty($ErrMsg)): ?>
							<div class="col-12">
								<div class="alert alert-danger alert-dismissable" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<p class="mb-0"><?=$ErrMsg?></p>
								</div>
							</div><?php endif ?>

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

        <?php require "inc/footer.php"?>


    </body>
</html>