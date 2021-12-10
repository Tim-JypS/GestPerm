<?php 
    if (isset($_GET['idemploi']) && isset($_GET['libelle']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="UPDATE emploi SET LibelleEmploi='".DataBase::EnleverApost($libelle)."' WHERE IdEmploi ='".$idemploi."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>