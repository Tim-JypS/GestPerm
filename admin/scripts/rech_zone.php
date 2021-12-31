<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
echo '0';
require './../inc/connexion_admin/server.php';


        
function getZoneByZone($zone) {
    global $pdo;
    $req1 = $pdo->prepare("SELECT CodeZone, LibelleZone FROM localite WHERE NiveauStr = :localite");
    $req1->execute(array('localite' => $zone));
    return $req1;
}

	if(isset($_GET["zone"]) && !empty($_GET["zone"])){
    
       // echo '2';

        
        $tab = ["ok"];

        $resultat=getZoneByZone($_GET["zone"]);
        //$resultat = $resultat->fetchAll();
        //echo var_dump($resultat);
        echo($resultat->rowCount());
$i = 0;
    
      // echo '2a';
        while($res = $resultat->fetch()){
            echo 'found';
            echo $res["CodeZone"];
            

            $tab[$i] = array(
                "id" => $res["CodeZone"],
                "lib" => $res["LibelleZone"]
            );
            $i++;
        }

		echo json_encode($tab);
	}else{
        echo 'no';
    }
?>