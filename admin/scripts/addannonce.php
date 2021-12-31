<?php 
    if (isset($_GET['type']) && isset($_GET['idagent']) && isset($_GET['locdesiree']) && isset($_GET['locorigine']))
    {
        require '../../class/database.php';
        require '../../inc/config.php';
        extract($_GET);
        $query="INSERT INTO annonce(IdAnnonce, DateAjoutAnnonce, LocaliteOrigineAnnonce, LocaliteDesireeAnnonce, StatutAnnonce, IdAgent, IdTypeAnnonce)";
        $query.=" VALUES(NULL,CURRENT_DATE(),'".$locorigine."','".$locdesiree."','VA0','".$idagent ."','".$type."')";
        Database::InsertQuery($query);
    }
    echo true;
 ?>