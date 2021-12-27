<?php
	require("inc/config.php");
	if(isset($_SESSION['auth']["status"]) && $_SESSION['auth']["status"])
    {
		if ($TypeUser==1)
			header("location:admin/historique.php");
		elseif($TypeUser==2 || $TypeUser==3)
			header("location:admin/validation.php");
		else
			header("location:admin/dashboard.php");
	}
    $Page="log";
    $PageTitle="GestPerm - Connexion";

	if(isset($_POST['login']) AND isset($_POST['password'])) 
	{
		$login= htmlspecialchars($_POST['login']); 
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
					header("location:admin/historique.php");
				elseif($TypeUser==2 || $TypeUser==3)
					header("location:admin/validation.php");
				else
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

