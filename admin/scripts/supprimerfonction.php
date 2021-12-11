<?php 
    if (isset($_GET['id']) && !empty($_GET['id']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="DELETE FROM fonction WHERE IdFonction='".$id."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>