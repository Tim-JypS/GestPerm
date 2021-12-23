<?php session_start();

if($_SESSION['auth']['user']->IdAgent){
	$IdAgent=$_SESSION['auth']['user']->IdAgent;

	if(isset($_FILES['file']) AND !empty($_FILES['file']['name'])){
	    $taille = 2097152;
	    $extensionsValides = array('jpg', 'jpeg', 'png', 'svg');
	    if($_FILES['file']['size'] <= $taille){
	        $extensionUpload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1));
	        if(in_array($extensionUpload, $extensionsValides)){
	            $chemin = "../../../../upload/signature/".$IdAgent.".".$extensionUpload;
	            $resultat = move_uploaded_file($_FILES['file']['tmp_name'], $chemin);
				$signatureAgent=$IdAgent.".".$extensionUpload;
	            if($resultat){

					include_once '../../../../../class/database.php';
	                $sql_update = "UPDATE agent SET signatureAgent = '".$signatureAgent."' WHERE IdAgent = '".$IdAgent."' ";
					Database::InsertQuery($sql_update);

	                echo $chemin;
	            }else{
	                alert ("Erreur durant l'importation de votre photo de profil");
	            }   // english: Error importing your profile photo;
	 
	        }else{
	            alert ("Votre photo de profil doit être au format jpg, jpeg ou png");
	        }       // english: Your profile picture must be in jpg, jpeg or png format;
	 
	    }else{
	        alert ("Votre photo de profil ne doit pas dépasser 2Mo");
	    }   // english:Your profile photo must not exceed 2MB;
	}

}

?>