<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="id.css" />
</head>
<body>
<?php
include('connexion.php');
if (isset($_REQUEST['id'], $_REQUEST['pw'])){
  // récupérer le nom d'utilisateur 
  $id = stripslashes($_REQUEST['id']);
  $id = mysqli_real_escape_string($db, $id); 
  // récupérer le mot de passe 
  $pw = stripslashes($_REQUEST['pw']);
  $pw = mysqli_real_escape_string($db, $pw);
  
  $query = "INSERT into `users` (username, type, password)
        VALUES ('$id',  'visiteur', '".hash('sha256', $pw)."')";
  $res = mysqli_query($db, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="POST">
<div>
         <img src="https://gsb.romaneledru.fr/images/logo.png" alt=""><br/>
          </div>
    <h1 class="box-title">S'inscrire</h1>
    <label for=""><b>identifiant</b></label>
        <input type="text" placeholder="enter your id" name="id" required><br/>
        <label for=""><b>Mot de passe</b></label>
        <input type="password" placeholder="enter your password " name="pw" required>
  
    <input type="submit" name="submit" 
  value="S'inscrire" class="box-button" />
  
    <p class="box-register">Déjà inscrit? 
  <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>