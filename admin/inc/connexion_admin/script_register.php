<?php
        if(isset($_POST['submit'])){
            if(isset($_POST['signup-username']) && isset($_POST['signup-email']) && isset($_POST['signup-password']) && isset($_POST['signup-password-confirm'])) {                    
                    require "server.php";
                    $password_hash=password_hash(htmlspecialchars($_POST['signup-password']),PASSWORD_BCRYPT);
                    $getdata = $pdo->prepare("INSERT INTO agent(MatriculeAgent,EmailAgent,PasswordAgent,idFonction) VALUES (:mat,:email,:pass,:fonc)");
                    $getdata->execute([
                                        'mat'=>$_POST['signup-username'],
                                        'email'=>$_POST['signup-email'],
                                        'pass'=>$password_hash,
                                        'fonc'=>4
                                    ]);

                    $SESSION['admin']=$_POST['login-username'];
                    header("location:../../validation.php"); 
        
          }else{
               $erreur = "veuillez bien renseigner le formulaire svp!";
               echo $erreur;
          }
    }
?>