<?php 
    if (isset($_GET['idval']) && !empty($_GET['idval']) && isset($_GET['idannonce']) && !empty($_GET['idannonce']) && isset($_GET['iduser']) && !empty($_GET['iduser']))
    {
        require '../../class/database.php';
        extract($_GET);
        $query="SELECT COUNT(*) as Nbre FROM validationannonce WHERE StatutValidation='VA' AND DateValidation IS NOT NULL AND IdAnnonce='".$idannonce."'";
        $getnbredejavalide=DataBase::SelectQuery($query)[0]->Nbre;
        // var_dump($query);
        $query="UPDATE validationannonce SET StatutValidation='VA', DateValidation=NOW() WHERE IdValidation='".$idval."'";
        Database::InsertQuery($query);
        $infoagent=Database::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$iduser."'")[0];
        $typeAgent=$infoagent->TypeAgent;
        if($typeAgent==4)
            $query="UPDATE annonce SET StatutAnnonce='VA' WHERE IdAnnonce='".$idannonce."'";
        else{
            //Transmission de la demande au suivant validateur
            if($typeAgent==2)
            {
                $query="SELECT IdAgent FROM agent WHERE TypeAgent=3 AND IdEcole=(SELECT IdDirectionRegionale FROM inspection WHERE IdInspection='".$infoagent->IdEcole."')";
                // var_dump($query);
                $Sup=Database::SelectQuery($query);
                if(count($Sup)>0)
                    $IdSup=$Sup[0]->IdAgent;
                else
                    $IdSup=-1;
            }
            else{
                if($getnbredejavalide>2)
                {
                    $query="SELECT IdAgent FROM agent WHERE TypeAgent=4 LIMIT 1";
                    // var_dump($query);
                    $Sup=Database::SelectQuery($query);
                    if(count($Sup)>0)
                        $IdSup=$Sup[0]->IdAgent;
                    else
                        $IdSup=-1;
                }
                else
                {
                    $query="SELECT * FROM annonce WHERE IdAnnonce='".$idannonce."'";
                    $infoannonce=Database::SelectQuery($query)[0];
                    $query="SELECT IdAgent FROM agent WHERE TypeAgent=2 AND IdEcole=(SELECT IdInspection FROM ecole WHERE IdEcole=(SELECT IdEcole FROM agent WHERE IdAgent='".$infoannonce->AdherantAnnonce."'))";
                    // var_dump($query);
                    $Sup=Database::SelectQuery($query);
                    if(count($Sup)>0)
                        $IdSup=$Sup[0]->IdAgent;
                    else
                        $IdSup=-1;
                }
            }
            $query="INSERT INTO validationannonce(IdValidation, DateEnvoiValidation, ValideurValidation, IdAnnonce) VALUES(NULL,NOW(),'".$IdSup."','".$idannonce."')";
            Database::InsertQuery($query);

            $query="UPDATE annonce SET StatutAnnonce='VA".($getnbredejavalide+2)."' WHERE IdAnnonce='".$idannonce."'";
        }
        Database::InsertQuery($query);
    }
    echo true;
 ?>