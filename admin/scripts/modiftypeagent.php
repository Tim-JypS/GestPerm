<?php 
    if (isset($_GET['idagent']) && isset($_GET['type']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="UPDATE agent SET TypeAgent='".DataBase::EnleverApost($type)."' WHERE IdAgent='".$idagent."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>