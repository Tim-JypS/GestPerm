<?php 
    if (isset($_GET['idzone']) && isset($_GET['zonemere']) && isset($_GET['libelle']) && isset($_GET['structure']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="UPDATE localite SET LibelleZone='".DataBase::EnleverApost($libelle)."', CodeZoneMere='".$zonemere."', NiveauStr='".$structure."' WHERE CodeZone='".$idzone."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>