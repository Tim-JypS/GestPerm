<?php 
    if (isset($_POST['annonce']) && isset($_POST['permutant']))
    {
        require '../../inc/config.php';
        extract($_POST);
               
        if($auto)
        {
            $query="SELECT IdAgent FROM agent WHERE TypeAgent=2 AND IdEcole=(SELECT IdInspection FROM ecole WHERE IdEcole=(SELECT IdEcole FROM agent WHERE IdAgent=(SELECT IdAgent FROM annonce WHERE IdAnnonce='".$annonce."')))";
            // var_dump($query);
            $idinspecteur=Database::SelectQuery($query);
            if(count($idinspecteur)==0)
            {
                echo 'Impossible de trouver l\'inspecteur pour la validation.<br />Merci de concater un administrateur.<br /><a onclick="history.go(-1)" href="#">Cliquez ici </a> pour revenir en arrière.';
            }else{
            $idinspecteur=$idinspecteur[0]->IdAgent;
            $query="INSERT INTO validationannonce(IdValidation, DateEnvoiValidation, ValideurValidation, IdAnnonce)";
            $query.=" VALUES(NULL,NOW(),'".$idinspecteur."','".$annonce."')";
            Database::InsertQuery($query);

            $query="UPDATE annonce SET AdherantAnnonce='".DataBase::EnleverApost($permutant)."', StatutAnnonce='VA1' WHERE IdAnnonce='".$annonce."'";
            // var_dump($query);
            Database::InsertQuery($query);
            }
        }
        else
        {
            $query="UPDATE annonce SET AdherantAnnonce='".DataBase::EnleverApost($permutant)."', StatutAnnonce='VA' WHERE IdAnnonce='".$annonce."'";
            // var_dump($query);
            Database::InsertQuery($query);
        }
        header('location:../historique.php');
    }
    else
        header('location:../annonces.php');

    //echo true;

 ?>