<?php 
    session_start();
    require 'inc/_global/config.php'; 
?>
<?php require '../inc/config.php'; ?>
<?php
    if(isset($_SESSION['auth']['user']->MatriculeAgent) AND isset($_POST['password'])) 
	{
		$login= htmlspecialchars($_SESSION['auth']['user']->MatriculeAgent); 
		$password= htmlspecialchars($_POST['password']);
		if(isset($_POST['remember']))
			$remember_me = htmlspecialchars($_POST['remember']);
		else
			$remember_me=false;
		
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
				$TypeUser=$_SESSION['auth']["user"]->TypeAgent;
				if ($TypeUser==1)
					header("location:historique.php");
				elseif($TypeUser==2 || $TypeUser==3)
					header("location:validation.php");
				else
					header("location:dashboard.php");
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


<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="bg-image" 
style="background-image: url('<?php echo $one->assets_folder; ?>


<?php 
                    $IdAgent = $_SESSION['auth']['user']->IdAgent;
                    $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$IdAgent'");
                    if($agent1["0"]->photoAgent){
                ?>
                    <?php echo "upload/avatar/".$agent1["0"]->photoAgent;?>" alt="Header Avatar" style="width: 21px;">

                <?php } 
                else {?>

                <?php echo '/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">';                 } ?>


    <div class="hero-static d-flex align-items-center">
        <div class="w-100">
            <!-- Unlock Section -->
            <div class="bg-white">
                <div class="content content-full">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                            <!-- Header -->
                            <div class="text-center">
                                <p class="mb-2">
                                    <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                </p>
                                <h1 class="h4 mb-1">
                                    Compte vérouiller
                                </h1>
                                <h2 class="h6 font-w400 text-muted mb-5">
                                    Entrer votre mot de passe pour devérouiller votre compte s'il vous plait!
                                </h2>
                                <?php $one->get_avatar(10, '', 96); ?>
                                <p class="font-w600 text-center my-2">
                                <?php echo $_SESSION['auth']['user']->NomAgent.' '.$_SESSION['auth']['user']->PrenomsAgent; ?>
                                </p>
                            </div>
                            <!-- END Header -->

                            <!-- Unlock Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-lock" action="" method="POST">
                                <div class="form-group py-3">
                                    <input type="password" class="form-control form-control-lg form-control-alt" id="password" name="password" placeholder="Password..">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <div class="col-md-6 col-xl-5">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-fw fa-lock-open mr-1"></i> Devérouiller
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Unlock Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Unlock Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-white py-3">
                <strong><?php echo $one->name . ' ' . $one->version; ?></strong> &copy; <span data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $one->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>

<!-- Page JS Code -->
<?php $one->get_js('js/pages/op_auth_lock.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>
