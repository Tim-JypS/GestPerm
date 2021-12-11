<?php 
    if (isset($_GET['type']) && isset($_GET['idagent']) && isset($_GET['locdesiree']) && isset($_GET['locorigine']))
    {
        require '../../class/database.php';
        require '../../inc/config.php';
        extract($_GET);
        $query="INSERT INTO annonce(IdAnnonce, DateAjoutAnnonce, LocaliteOrigineAnnonce, LocaliteDesireeAnnonce, StatutAnnonce, IdAgent, IdTypeAnnonce)";
        $query.=" VALUES(NULL,CURRENT_DATE(),'".$locorigine."','".$locdesiree."','VA0','".$idagent ."','".$type."')";
        Database::InsertQuery($query);
        $lastannonce=DataBase::SelectQuery("SELECT MAX(IdAnnonce) as Lasted FROM annonce")[0]->Lasted;
        $idinspecteur=Database::SelectQuery("SELECT a.IdAgent FROM agent a,typeagent t WHERE t.IdTypeAgent=a.TypeAgent AND a.TypeAgent='2' AND a.IdEcole=(SELECT IdInspection FROM ecole WHERE IdEcole='".$IdEcole."')")[0]->IdAgent;
        $query="INSERT INTO validation(IdValidation, DateEnvoiValidation, ValideurValidation, IdAnnonce)";
        $query.=" VALUES(NULL,NOW(),'".$idinspecteur."','".$lastannonce."')";
        var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>