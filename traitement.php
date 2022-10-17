<?php
        
       session_start();
       if (isset ($_SESSION['id'])){
    
       }

       else{
        if(isset( $_POST ['id'],$_POST['pw'])){

            $id=$_POST ['id'];
            $pw=$_POST['pw'];
       
       if (isset ($_POST ['id']) && isset($_POST['pw'])){
        if ($id=="Sofiane" && $pw=="112233"){
            $_SESSION['id'] = $id;
            header('Location: principale.php');
           

        }
             else
             {
                header('Location: login.php'); // utilisateur ou mot de passe incorrect
                echo "Utilisateur ou mot de passe incorrect";
            }
       }
       
    }

}

                 
                

        ?>