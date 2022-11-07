<?php
       
    
       session_start();

    

        if(isset( $_POST ['id'],$_POST['pw'])){

            $id=$_POST ['id'];
            $pw=$_POST['pw'];
       
       if (isset ($_POST ['id']) && isset($_POST['pw'])){

           try {
        $db = new PDO("mysql:host=localhost;dbname=id",'root');
       
        echo 'Connected to database';
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
       
        if ($id !== "" && $pw !== "") {
            $requete = "SELECT * FROM id where 
              id = '".$id."' and password = '".$pw."' ";
              $exec_requete = query($requete);
             $reponse= fetch ($exec_requete);
             $count = $reponse['count(*)'];
             if($count!=0){
             $_SESSION['id'] = $id;
            header('Location: principale.php');
             }

        }
             else
             {
                header('Location: login.php'); // utilisateur ou mot de passe incorrect
                echo "Utilisateur ou mot de passe incorrect";
            }
       }
       
    }



                 
                

        ?>