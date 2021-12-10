<?php 
    if (isset($_GET['LibelleEmploi']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="INSERT INTO emploi(IdEmploi, LibelleEmploi) VALUES(NULL,'".DataBase::EnleverApost($LibelleEmploi)."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>