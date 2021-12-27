<?php
	//if(isset($_POST["zone"])){
        require './../inc/connexion_admin/server.php';
        
        function getZoneByZone($zone) {
            global $pdo;
            $req1 = $pdo->prepare('SELECT CodeZone, LibelleZone FROM localite WHERE NiveauStr= :zone');
            $req1->execute(array('zone' => 4));
            return $req1;
        }

        $resultat=getZoneByZone($_POST["zone"]);
        $resultat = $resultat->fetchAll();
        echo var_dump($resultat);
		echo json_encode(array('resultat' => $resultat,'total' => count($resultat) ));
	//}
?>