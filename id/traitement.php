<?php
       
    
       session_start();

    

        if(isset( $_POST ['id'],$_POST['pw'])){
            include 'connexion.php';
            $id=$_POST ['id'];
            $pw=$_POST['pw'];
       
       if (isset ($_POST ['id']) && isset($_POST['pw'])){
        if($id !== "" && $pw !== "")
        {
        $requete = "SELECT count(*) FROM id where 
        identifiant = '".$id."' and mot_de_passe = '".$pw."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
            if($count!=0) // nom d'utilisateur et mot de passe correctes
            {
            $_SESSION['id'] = $id;
            header('Location: principale.php');
            }
           else {
            header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
           }
    }}}

        ?>