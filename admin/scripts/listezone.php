<?php
	//if(isset($_POST["zone"])){
        require './../inc/connexion_admin/server.php';
        
        function getZoneByZone($zone) {
            global $pdo;
            $req1 = $pdo->prepare('SELECT CodeZone, LibelleZone FROM localite WHERE NiveauStr= :zone');
            $req1->execute(array('zone' => 4));
            return $req1;
        }

        echo ' <option></option>';
        $resultats=getZoneByZone($_GET["zone"]);
        while($resultat = $resultats->fetch()){
            echo '<option value="'.$resultat["CodeZone"].'">'.$resultat["LibelleZone"].'</option>';
        }
        $resultats->closeCursor();
           
            
        
	//}
?>