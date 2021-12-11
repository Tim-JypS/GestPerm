<?php 
    if (isset($_POST['annonce']) && isset($_POST['permutant']))
    {
        require '../../class/database.php';
        extract($_POST);
        $query="UPDATE annonce SET AdherantAnnonce='".DataBase::EnleverApost($permutant)."', StatutAnnonce='VA1' WHERE IdAnnonce='".$annonce."'";
        // var_dump($query);
        Database::InsertQuery($query);
        header('location:../historique.php');
    }
    else
        header('location:../annonces.php');

    //echo true;

 ?>