<?php 
    if (isset($_GET['idval']) && !empty($_GET['idval']) && isset($_GET['idannonce']) && !empty($_GET['idannonce']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="SELECT COUNT(*) as Nbre FROM validationannonce WHERE StatutValidation='VA' AND DateValidation IS NOT NULL AND IdAnnonce='".$idannonce."'";
        $getnbredejavalide=DataBase::SelectQuery($query)[0]->Nbre;
        // var_dump($query);
        $query="UPDATE validationannonce SET StatutValidation='VA', DateValidation=NOW() WHERE IdValidation='".$idval."'";
        Database::InsertQuery($query);

        $query="UPDATE annonce SET StatutAnnonce='VA".($getnbredejavalide+2)."' WHERE IdAnnonce='".$idannonce."'";
        Database::InsertQuery($query);
    }
    echo true;
 ?>