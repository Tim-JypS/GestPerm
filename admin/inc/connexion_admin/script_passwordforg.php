<?php
require "server.php";
        if(isset($_POST['submit'])){
            if(isset($_POST['reminder-credential'])) {                    
                    $stmt = $connexion->prepare('SELECT COUNT(*) AS email FROM agent WHERE emailAgent = ?');
                    $stmt->bindValue(1, $_POST['reminder-credential']);
                    $stmt->execute();

                    $ligne = $stmt->fetch(PDO::FECTH_ASSOC);
                    if(!empty($ligne) && $ligne['nb'] > 0){
                        $string = implode('' , array_merge(range('A','Z'), range('a','z'), range('0','9')));
                        $token = substr(str_shuffle($string), 0, 20);
                    }
                    /*$SESSION['admin']=$_POST['login-username'];
                    header("location:../../validation.php"); */
        
          }else{
               $erreur = "veuillez bien renseigner le formulaire svp!";
               echo $erreur;
          }
    }
?>