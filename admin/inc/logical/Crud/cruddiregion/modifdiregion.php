<?php 
    if (isset($_GET['idregional']) && isset($_GET['nomdr']) && isset($_GET['teldr']) && isset($_GET['emaildr']) && isset($_GET['locdr']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="UPDATE directionregionale SET NomDirectionRegionale='".DataBase::EnleverApost($nomdr)."', TelDirectionRegionale='".$teldr."', EmailDirectionRegionale='".$emaildr."', CommuneDirectionRegionale='".$locdr."' WHERE IdDirectionRegionale ='".$idregional."'";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>