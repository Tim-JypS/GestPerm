<?php 
    if (isset($_GET['idecole']) && isset($_GET['type']) && isset($_GET['libelle']) && isset($_GET['localite']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="UPDATE ecole SET NomEcole='".DataBase::EnleverApost($libelle)."',TypeEcole='".($type==1?'Primaire':'Pré-scolaire')."', LocaliteEcole='".($localite==''?'2':$localite) ."' WHERE IdEcole='".$idecole."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>