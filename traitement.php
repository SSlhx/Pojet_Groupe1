<?php
       session_start();
       $id = $_POST ['id'];
       $pw = $_POST['pw'];
       if (isset ($_POST ['id']) && isset($_POST['pw'])){
        if ($id=="Sofiane" && $pw=="112233"){
            $_SESSION['id'] = $id;
            header('Location: principale.php');
        }
             else
             {
                header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
                echo "Utilisateur ou mot de passe incorrect";
            }
       }
       else {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
     
    }


 
    
                 
                

        ?>