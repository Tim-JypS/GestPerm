<?php
	require("inc/config.php");
    $Page="reg";
    $PageTitle=SITENAME." - Nouveau compte";

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dna']) && isset($_POST['mat']) && isset($_POST['pass1']) && isset($_POST['pass2'])) 
	{
		extract($_POST);
		// var_dump($sexe);die();
		if(empty($sexe) || !isset($sexe) || $sexe=="#")
		{
			$ErrMsg="Choisir le sexe.";
			$ErrPage="reg1";
		}
		else
		{
			if(empty($civ) || !isset($civ) || $civ=="#")
			{
				$ErrMsg="Choisir la civilité.";
				$ErrPage="reg1";
			}
			else
			{
				if(empty($sitm) || !isset($sitm) || $sitm=="#")
				{
					$ErrMsg="Choisir la situation matrimoniale.";
					$ErrPage="reg1";
				}
			}
		}
		
		if($pass1!=$pass2)
		{
			$ErrMsg="Mots de passe différents.";
			$ErrPage="reg1";
		}
		else
		{

			if(!class_exists("Database"))
				require 'class/database.php';

			$reponse=Database::SelectQuery("select * from agent where MatriculeAgent='".$mat."'");

			//
			if(count($reponse)>0)
			{
				$ErrMsg="Le matricule existe déjà.";
				$ErrPage="reg1";
			}
			else
			{
				// Insertion dans la bd
				$password_hash=password_hash(htmlspecialchars($pass1),PASSWORD_BCRYPT);
				$query="INSERT INTO agent(IdAgent,MatriculeAgent,NomAgent,PrenomsAgent,CiviliteAgent,NomJeuneFilleAgent,SexeAgent,DateNaissanceAgent,EmailAgent,SituationMatrimonialeAgent,DateCreationAgent,PasswordAgent)";
				$query.=" VALUES (NULL,'".Database::EnleverApost($mat)."','".Database::EnleverApost($nom)."','".Database::EnleverApost($prenom)."','".Database::EnleverApost($civ)."','".Database::EnleverApost($nomfille)."','".Database::EnleverApost($sexe)."','".Database::EnleverApost($dna)."','".Database::EnleverApost($email)."','".Database::EnleverApost($sitm)."','".date("Y-m-d")."','".$password_hash."')";
				$sauvegarder=Database::InsertQuery($query);
				// var_dump($query,$sauvegarder);die();
				$_SESSION['auth']["status"] = true;
				$reponse=Database::SelectQuery("select MAX(IdAgent) from agent");
				$_SESSION['auth']["user"] = $reponse[0];
				header("location:admin/dashboard.php");
			}
		}
	}

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
		<section class="sign-up-area ptb-70">
			<div class="container">
				<?php /*<div class="scetion-title text-center">
					<h2>Créer votre compte!</h2>
					<p>
                        It is a long established fact that a reader will be distracted by
                        the readable content of a page when looking at its layout.
                    </p>
				</div>*/?>
				<div class="contact-wrap-form row pt-45">
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
                            
                            <div class="col-4">
								<div class="form-group">
									<input class="form-control" value="<?php if(isset($nom))echo $nom; ?>" type="text" name="nom" placeholder="Nom" required>
								</div>
							</div>

                            <div class="col-8">
								<div class="form-group">
									<input class="form-control" type="text" name="prenom" value="<?php if(isset($prenom))echo $prenom; ?>" placeholder="Prénom" required>
								</div>
							</div>

                            <div class="col-4">
								<div class="form-group">
									<input class="form-control" type="text" name="nomfille" value="<?php if(isset($nomfille))echo $nomfille; ?>" placeholder="Nom jeune fille">
								</div>
							</div>

                            <div class="col-2">
								<div class="form-group">
									<select class="form-control" name="sexe" required>
										<option value="#" <?php if(isset($sexe) && $sexe=="#")echo " selected"; ?>>Sexe</option>
										<option value="F" <?php if(isset($sexe) && $sexe=="F")echo " selected"; ?>>F</option>
										<option value="M" <?php if(isset($sexe) && $sexe=="M")echo " selected"; ?>>M</option>
									</select>
								</div>
							</div>

                            <div class="col-2">
								<div class="form-group">
									<select class="form-control" name="civ" required>
										<option value="#" <?php if(isset($civ) && $civ=="#")echo " selected"; ?>>Civilité</option>
										<option value="Monsieur" <?php if(isset($civ) && $civ=="Monsieur")echo " selected"; ?>>M</option>
										<option value="Madame" <?php if(isset($civ) && $civ=="Madame")echo " selected"; ?>>Mme</option>
										<option value="Mademoiselle" <?php if(isset($civ) && $civ=="Mademoiselle")echo " selected"; ?>>Mlle</option>
									</select>
								</div>
							</div>
							
                            <div class="col-4">
								<div class="form-group">
									<select class="form-control" name="sitm" required>
										<option value="#" <?php if(isset($sitm) && $sitm=="#")echo " selected"; ?>>Situation matrimoniale</option>
										<option value="Marie" <?php if(isset($sitm) && $sitm=="Marie")echo " selected"; ?>>Marié(e)</option>
										<option value="Celibat" <?php if(isset($sitm) && $sitm=="Celibat")echo " selected"; ?>>Célibataire</option>
										<option value="Veuve" <?php if(isset($sitm) && $sitm=="Veuve")echo " selected"; ?>>Veuf(ve)</option>
									</select>
								</div>
							</div>
							
                            <div class="col-4">
								<div class="form-group">
									<input class="form-control" value="<?php if(isset($dna))echo $dna; ?>" type="date" name="dna" placeholder="Date de naissance" required>
								</div>
							</div>

							<div class="col-4">
								<div class="form-group">
									<input class="form-control" type="text" value="<?php if(isset($mat))echo $mat; ?>" name="mat" placeholder="Matricule" required>
								</div>
							</div>

							<div class="col-4">
								<div class="form-group">
									<input class="form-control" type="email" value="<?php if(isset($email))echo $email; ?>" name="email" placeholder="Email">
								</div>
							</div>
							
							<hr class="hr-text" data-content="AND">

							<div class="col-4">
								<div class="form-group">
									<input class="form-control" type="password" name="pass1" placeholder="Mot de passe" required>
								</div>
							</div>
							
							<div class="col-8">
								<div class="form-group">
									<input class="form-control" type="password" name="pass2" placeholder="Confirmez votre mot de passe" required>
								</div>
							</div>

							<?php if($ErrPage=="reg1" && !empty($ErrMsg)): ?>
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

       <?php require "inc/footer.php"?>

    </body>
</html>