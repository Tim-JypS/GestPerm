<?php
	if(isset($_POST["zone"])){
        require '../../class/database.php';
        $resultat="SELECT CodeZone, LibelleZone FROM localite WHERE NiveauStr='".$_POST["zone"]."'";
        $resultat = $resultat->fetchAll();
		echo json_encode(array('resultat' => $resultat,'total' => count($resultat) ));
	}
?>