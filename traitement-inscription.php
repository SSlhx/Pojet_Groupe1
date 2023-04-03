<?php 

include('connexion.php');
include('connexion2.php');

if (isset($_REQUEST['id'], $_REQUEST['pw'])){
  // récupérer le nom d'utilisateur 
  $id = stripslashes($_REQUEST['id']);
  $id = mysqli_real_escape_string($db, $id); 
  // récupérer le mot de passe 
  $pw = stripslashes($_REQUEST['pw']);
  $pw = mysqli_real_escape_string($db, $pw);
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($db, $nom); 
  $prenom = stripslashes($_POST['prenom']);
  $prenom = mysqli_real_escape_string($db, $prenom);
  $departement = stripslashes($_REQUEST['activity']);
  $departement = mysqli_real_escape_string($db, $departement);
  
 
$query = $con->prepare("INSERT into `users` (username, type, password, nom, prenom, departement)
VALUES ('$id',  'visiteur', '".hash('sha256', $pw)."', '$nom', '$prenom', '$departement')");
  $query->execute();

       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    
    
}
    ?>