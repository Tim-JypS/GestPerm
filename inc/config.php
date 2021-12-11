<?php
    if(!class_exists("Database"))
    {
        if(file_exists('../class/database.php'))
        {
            require '../class/database.php';
        }elseif(file_exists('../../class/database.php'))
        {
            require '../../class/database.php';
        }
        else require 'class/database.php';
    }
    $Page="";
    if(session_status()==PHP_SESSION_NONE)
	{
		session_start();
	}
    if (!isset($ErrPage))
    {
        GLOBAL $ErrMsg;
        GLOBAL $ErrPage;
    }
    
    $TypeUser;
    $LibTypeUser;
    $NomUser;
    $PreUser;
    $CivUser;
    $EmailUser;
    $IdFonctionUser;
    $IdEmploiUser;

    if(isset($_SESSION["auth"]["user"]))
    {
        $MatAgent=$_SESSION["auth"]["user"]->MatriculeAgent;
        $IdAgent=$_SESSION["auth"]["user"]->IdAgent;
        $IdEcole=$_SESSION["auth"]["user"]->IdEcole;
        $TypeUser=$_SESSION["auth"]["user"]->TypeAgent;
        $LibTypeUser=Database::SelectQuery("SELECT NomTypeAgent FROM typeagent WHERE IdTypeAgent='".$TypeUser."'")[0]->NomTypeAgent;
        
        if($TypeUser==2){
            $InfoEcole=Database::SelectQuery("SELECT * FROM inspection WHERE IdInspection='".$IdEcole."'");
            $LibEcole=$InfoEcole[0]->NomInspection;
            $InfoLocatite=Database::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$InfoEcole[0]->CommuneInspection."'");
        }
        elseif($TypeUser==3)
        {
            $InfoEcole=Database::SelectQuery("SELECT * FROM directionregionale WHERE IdDirectionRegionale='".$IdEcole."'");
            $LibEcole=$InfoEcole[0]->NomDirectionRegionale;
            $InfoLocatite=Database::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$InfoEcole[0]->CommuneDirectionRegionale."'");
        }
        else{
            $InfoEcole=Database::SelectQuery("SELECT * FROM ecole WHERE IdEcole='".$IdEcole."'");
            $LibEcole=$InfoEcole[0]->NomEcole;
            $InfoLocatite=Database::SelectQuery("SELECT * FROM localite WHERE CodeZone='".$InfoEcole[0]->LocaliteEcole."'");
        }
        $IdLocaliteOrigine=$InfoLocatite[0]->CodeZone;
        $LocaliteOrigine=str_replace("&apost;","'",$InfoLocatite[0]->LibelleZone);
        $NomUser=$_SESSION["auth"]["user"]->NomAgent;
        $PreUser=$_SESSION["auth"]["user"]->PrenomsAgent;
        $CivUser=$_SESSION["auth"]["user"]->CiviliteAgent;
        $EmailUser=$_SESSION["auth"]["user"]->EmailAgent;
        $IdFonctionUser=$_SESSION["auth"]["user"]->IdFonction;
        $query="SELECT NomFonction FROM fonction WHERE IdFonction='".$IdFonctionUser."'";
        $LibFonctionUser=Database::SelectQuery($query)[0]->NomFonction;
        $IdEmploiUser=$_SESSION["auth"]["user"]->IdEmploi;
        $LibEmploiUser=Database::SelectQuery("SELECT LibelleEmploi FROM emploi WHERE IdEmploi='".$IdEmploiUser."'")[0]->LibelleEmploi;
    }
?>