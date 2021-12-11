<?php 
    if (isset($_GET['value']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="UPDATE configsite SET validationconf='".$value."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>