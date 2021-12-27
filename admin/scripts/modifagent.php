<?php 
   //&& isset($_GET['nom']) && isset($_GET['prenoms']) && isset($_GET['civilite']) && isset($_GET['nomJeuneFille']) && isset($_GET['sexe']) && isset($_GET['dateNaissance']) && isset($_GET['telephone']) && isset($_GET['email']) && isset($_GET['datePriseService']) && isset($_GET['situationMatrimoniale']) && isset($_GET['fonction'])
   if (isset($_GET['idagent']) )
    {
        require '../../class/database.php';
        require '../../inc/config.php';
        extract($_GET);
        $query="UPDATE agent SET NomAgent='".DataBase::EnleverApost($nom)."', PrenomsAgent='".DataBase::EnleverApost($prenoms)."', CiviliteAgent='".DataBase::EnleverApost($civilite)."', NomJeuneFilleAgent='".DataBase::EnleverApost($nomJeuneFille)."',SexeAgent='".DataBase::EnleverApost($sexe)."', DateNaissanceAgent='".DataBase::EnleverApost($dateNaissance)."', TelAgent='".DataBase::EnleverApost($telephone)."', EmailAgent='".DataBase::EnleverApost($email)."', DatePriseServiceAgent='".DataBase::EnleverApost($datePriseService)."', SituationMatrimonialeAgent='".DataBase::EnleverApost($situationMatrimoniale)."', IdFonction='".DataBase::EnleverApost($fonctionAgent)."', IdEcole='".DataBase::EnleverApost($ecole)."' WHERE IdAgent='".$idagent."'";
        Database::InsertQuery($query);
        $reponse=Database::SelectQuery("select * from agent where IdAgent='".$idagent."'");
        $_SESSION['auth']["status"] = true;
        $_SESSION['auth']["user"] = $reponse[0];
    }
    echo true;
 ?>