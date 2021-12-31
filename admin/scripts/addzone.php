<?php 
    if (isset($_GET['type']) && isset($_GET['libelle']) && isset($_GET['localite']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="INSERT INTO localite (CodeZone, LibelleZone, CodeZoneMere, NiveauStr) VALUES(NULL,'".DataBase::EnleverApost($libelle)."','".$localite."','".$type."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>