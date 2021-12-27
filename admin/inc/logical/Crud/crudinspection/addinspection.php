<?php 
    if (isset($_GET['NomInspection']) && isset($_GET['TelInspection']) && isset($_GET['CommuneInspection']) && isset($_GET['direction']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="INSERT INTO  inspection (IdInspection, NomInspection, TelInspection, CommuneInspection, IdDirectionRegionale) VALUES(NULL,'".DataBase::EnleverApost($NomInspection)."','".$TelInspection."','".($CommuneInspection==''?'2':$CommuneInspection) ."','".$direction."')";
        var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>