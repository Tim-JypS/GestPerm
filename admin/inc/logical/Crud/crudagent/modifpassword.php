<?php 
    if (isset($_GET['idagent']) && isset($_GET['MotDePasse']) && isset($_GET['AncienPassword']))
    {
        require '../../../../../class/database.php';
        extract($_GET);
        $password_hash=password_hash(htmlspecialchars($MotDePasse),PASSWORD_BCRYPT);
        //$AncienPassword_hash=password_hash(htmlspecialchars($AncienPassword),PASSWORD_BCRYPT);
        
        $agent1=DataBase::SelectQuery("SELECT * FROM agent WHERE IdAgent='$idagent'");

        var_dump($agent1["0"]->PasswordAgent == $AncienPassword_hash);
        $isPasswordCorrect = password_verify($AncienPassword, $agent1["0"]->PasswordAgent);
        if($isPasswordCorrect){
            $query="UPDATE agent SET PasswordAgent='".DataBase::EnleverApost($password_hash)."' WHERE IdAgent ='".$idagent."'";
            // var_dump($query);
            Database::InsertQuery($query);
            header("location:../../../../unlock.php");
        }
    }
    echo true;
 ?>