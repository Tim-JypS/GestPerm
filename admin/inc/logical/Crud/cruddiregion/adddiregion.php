<?php 
    if (isset($_GET['nomdr']) && isset($_GET['tel']) && isset($_GET['email']) && isset($_GET['localite']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $query="INSERT INTO directionregionale(IdDirectionRegionale, NomDirectionRegionale, TelDirectionRegionale, EmailDirectionRegionale, CommuneDirectionRegionale) VALUES(NULL,'".DataBase::EnleverApost($nomdr)."','".$tel."','".$email."','".($localite==''?'2':$localite) ."')";
        // var_dump($query);
        Database::InsertQuery($query);
    }
    echo true;
 ?>