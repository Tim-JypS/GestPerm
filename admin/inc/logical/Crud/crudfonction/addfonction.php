<?php 
    if (isset($_GET['NomFonction']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="INSERT INTO fonction(IdFonction, NomFonction) VALUES(NULL,'".DataBase::EnleverApost($NomFonction)."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>