<?php 
    if (isset($_GET['nom']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="INSERT INTO fonction(IdFonction, NomFonction) VALUES(NULL,'".DataBase::EnleverApost($nom)."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>