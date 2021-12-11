<?php 
    if (isset($_POST['annonce']) && isset($_POST['permutant']))
    {
        require '../../class/database.php';
        extract($_POST);
        $query="UPDATE annonce SET AdherantAnnonce='".DataBase::EnleverApost($permutant)."' WHERE IdAnnonce='".$annonce."'";
        //var_dump($query);
        Database::InsertQuery($query);
    }
   header('location:../profile.php');
    //echo true;

 ?>