<?php 
    if (isset($_GET['type']) && isset($_GET['libelle']) && isset($_GET['localite']) && isset($_GET['inspect']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="INSERT INTO ecole(IdEcole, NomEcole, TypeEcole, LocaliteEcole, IdInspection) VALUES(NULL,'".DataBase::EnleverApost($libelle)."','".($type==1?'Primaire':'Pré-scolaire')."','".($localite==''?'2':$localite) ."','".$inspect."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>