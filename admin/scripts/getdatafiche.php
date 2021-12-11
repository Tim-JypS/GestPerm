<?php
$NomPrens1="";
$JeuneFille1="";
$Mat1="";
$Emploi1="";
$DR1="";
$Ecole1="";
$Discipline1="";
$Fonction1="";

$NomPrens2="";
$JeuneFille2="";
$Mat2="";
$Emploi2="";
$DR2="";
$Ecole2="";
$Discipline2="";
$Fonction2="";
if(isset($_GET["idfiche"]) && !empty($_GET["idfiche"]))
{
    extract($_GET);
    $query="SELECT * FROM annonce WHERE IdAnnonce='".$idfiche."'";
    $InfoAnnonce=Database::SelectQuery($query);
    
}
?>