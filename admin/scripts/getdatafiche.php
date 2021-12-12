<?php
$NomPrens1="";
$JeuneFille1="";
$Mat1="";
$Emploi1="";
$DR1="";
$Dna1="";
$Ecole1="";
$Discipline1="";
$Fonction1="";

$NomPrens2="";
$JeuneFille2="";
$Mat2="";
$Emploi2="";
$DR2="";
$Dna2="";
$Ecole2="";
$Discipline2="";
$Fonction2="";
require "../../inc/config.php";
if(isset($_GET["idannonce"]) && !empty($_GET["idannonce"]))
{
    extract($_GET);
    $query="SELECT * FROM annonce WHERE IdAnnonce='".$idannonce."'";
    $InfoAnnonce=Database::SelectQuery($query);
    if(count($InfoAnnonce)==0)
    {
        echo 0; return;
    }
    else
    {
        $InfoAgent=Database::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$InfoAnnonce[0]->IdAgent."'");
        
        $NomPrens1=trim($InfoAgent[0]->NomAgent." ".$InfoAgent[0]->PrenomsAgent);
        $JeuneFille1=trim($InfoAgent[0]->NomJeuneFilleAgent);
        $Dna1=(new DateTime($InfoAgent[0]->DateNaissanceAgent))->format("d/m/Y");
        $Mat1=$InfoAgent[0]->MatriculeAgent;
        $Emploi1=Database::SelectQuery("SELECT LibelleEmploi FROM emploi WHERE IdEmploi='".$InfoAgent[0]->IdEmploi."'")[0]->LibelleEmploi;
        $DR1=Database::SelectQuery("SELECT NomDirectionRegionale FROM directionregionale WHERE IdDirectionRegionale=(SELECT IdDirectionRegionale FROM inspection WHERE IdInspection=(SELECT IdInspection FROM ecole WHERE IdEcole='".$InfoAgent[0]->IdEcole."'))")[0]->NomDirectionRegionale;
        $Ecole1=Database::SelectQuery("SELECT NomEcole FROM ecole WHERE IdEcole='".$InfoAgent[0]->IdEcole."'")[0]->NomEcole;
        $Fonction1=Database::SelectQuery("SELECT NomFonction FROM fonction WHERE IdFonction='".$InfoAgent[0]->IdFonction."'")[0]->NomFonction;

        $InfoAgent=Database::SelectQuery("SELECT * FROM agent WHERE IdAgent='".$InfoAnnonce[0]->AdherantAnnonce."'");
        $NomPrens2=trim($InfoAgent[0]->NomAgent." ".$InfoAgent[0]->PrenomsAgent);
        $JeuneFille2=trim($InfoAgent[0]->NomJeuneFilleAgent);
        $Dna2=(new DateTime($InfoAgent[0]->DateNaissanceAgent))->format("d/m/Y");
        $Mat2=$InfoAgent[0]->MatriculeAgent;
        $Emploi2=Database::SelectQuery("SELECT LibelleEmploi FROM emploi WHERE IdEmploi='".$InfoAgent[0]->IdEmploi."'")[0]->LibelleEmploi;
        $DR2=Database::SelectQuery("SELECT NomDirectionRegionale FROM directionregionale WHERE IdDirectionRegionale=(SELECT IdDirectionRegionale FROM inspection WHERE IdInspection=(SELECT IdInspection FROM ecole WHERE IdEcole='".$InfoAgent[0]->IdEcole."'))")[0]->NomDirectionRegionale;
        $Ecole2=Database::SelectQuery("SELECT NomEcole FROM ecole WHERE IdEcole='".$InfoAgent[0]->IdEcole."'")[0]->NomEcole;
        $Fonction2=Database::SelectQuery("SELECT NomFonction FROM fonction WHERE IdFonction='".$InfoAgent[0]->IdFonction."'")[0]->NomFonction;
    }
}
$arr=array("Nom1"=>$NomPrens1,"Fille1"=>$JeuneFille1,"Discipline1"=>$Discipline1,"Dna1"=>$Dna1,"Mat1"=>$Mat1,"Emploi1"=>$Emploi1,"DR1"=>$DR1,"Ecole1"=>$Ecole1,"Fonction1"=>$Fonction1,"Nom2"=>$NomPrens2,"Fille2"=>$JeuneFille2,"Discipline1"=>$Discipline2,"Dna2"=>$Dna2,"Mat2"=>$Mat2,"Emploi2"=>$Emploi2,"DR2"=>$DR2,"Ecole2"=>$Ecole2,"Fonction2"=>$Fonction2);
$data=json_encode($arr);
echo $data;
?>