<?php 
    if (isset($_GET['idfonction']) && isset($_GET['nom']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="UPDATE fonction SET NomFonction='".DataBase::EnleverApost($nom)."' WHERE IdFonction='".$idfonction."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>