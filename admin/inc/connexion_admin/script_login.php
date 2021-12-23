<?php
        if(isset($_POST['submit'])){
          if(isset($_POST['login-username']) and !empty($_POST['login-username'])){
                if(isset($_POST['login-password']) and !empty($_POST['login-password'])){
                    
                    require "server.php";
        
                    $getdata = $pdo->prepare("SELECT MatriculeAgent,PasswordAgent FROM agent WHERE MatriculeAgent=? AND idFonction = '4'");
                    $getdata->execute(array($_POST['login-username']));
                    $rows = $getdata->fetch();
                    if (count($rows) > 0) {
                        $isPasswordCorrect = password_verify($_POST['login-password'], $rows['PasswordAgent']);
                        var_dump($isPasswordCorrect);
                        $SESSION['admin']=$_POST['login-username'];
                        header("location:../../validation.php"); 
                    }
                    else {
                        $erreur = "votre matricule est inconnue";
                        echo $erreur;
                    }
        
                }else{
                    $erreur = "veuillez saisir votre mot de passe"; 
                    echo $erreur;
                }
          }else{
               $erreur = "veuillez saisir votre matricule";
               echo $erreur;
          }
    }
?>