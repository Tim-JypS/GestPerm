<?php 

    if (isset($_GET['nominspection']) && isset($_GET['tel']) && isset($_GET['localite']) && isset($_GET['direction']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="INSERT INTO  inspection(IdInspection, NomInspection, TelInspection, CommuneInspection,IdDirectionRegionale) VALUES(NULL,'".DataBase::EnleverApost($nominspection)."','".$tel."','".($localite==''?'2':$localite) ."','".$direction."')";        var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>