<?php 
    if (isset($_GET['idinspec']) && isset($_GET['nominsp']) && isset($_GET['telinspec']) && isset($_GET['locinsp']) && isset($_GET['direction']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="UPDATE inspection SET NomInspection='".DataBase::EnleverApost($nominsp)."', TelInspection='".$telinspec."', CommuneInspection='".$locinsp."', IdDirectionRegionale='".$direction."' WHERE IdInspection ='".$idinspec."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>