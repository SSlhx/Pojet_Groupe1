<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="id.css" />
</head>
<body>
<?php
include('connexion.php');
include('connexion2.php');

if (isset($_REQUEST['id'], $_REQUEST['pw'], $_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['activity']  )){
  // récupérer le nom d'utilisateur 
  $id = stripslashes($_REQUEST['id']);
  $id = mysqli_real_escape_string($db, $id); 
  // récupérer le mot de passe 
  $pw = stripslashes($_REQUEST['pw']);
  $pw = mysqli_real_escape_string($db, $pw);
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($db, $nom); 
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($db, $prenom);
  $departement = stripslashes($_REQUEST['activity']);
  $departement = mysqli_real_escape_string($db, $departement);
  
  $query = "INSERT into `users` (username, type, password, nom, prenom)
        VALUES ('$id',  'visiteur', '".hash('sha256', $pw)."', '$nom', '$prenom')";
  $res = mysqli_query($db, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="traitement-inscription.php" method="POST">
<div>
         <img src="https://gsb.romaneledru.fr/images/logo.png" alt=""><br/>
          </div>
    <h1 class="box-title">S'inscrire</h1>
    <label for=""><b>identifiant</b></label>
        <input type="text" placeholder="enter your id" name="id" required><br/>

         <label for=""><b>Nom</b></label>
        <input type="text" placeholder="enter your id" name="nom" required><br/>

        <label for=""><b>Prenom</b></label>
        <input type="text" placeholder="enter your id" name="prenom" required><br/>

        <select name="activity" id="pet-select">
                            <option value="">Veuillez choisir la région</option>
                          <?php  $region = $con->query("SELECT * FROM region");
                          
                          while ($dep = $region->fetch()){?>
                            <option value="<?php echo $dep['departement'];?>"><?php echo $dep['departement'];?></option>
                        <?php }?>
                            </select>

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