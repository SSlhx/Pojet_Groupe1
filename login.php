<?php 
       if(isset( $_SESSION['id'])){
        header('Location: index.php');
  }
else {
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>

<!-- LIENS POUR AJOUTER TAILWIND ELEMENT (EX: CAROUSEL) -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
<link  rel="stylesheet" href="id.css"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSB_identification</title>

</head>
<body>
  <section class="container">
  <form action="traitement_test.php" method="POST">
      <div>
         <img src="https://gsb.romaneledru.fr/images/logo.png" alt=""><br/>
          </div>
        
        <label for=""><b>identifiant</b></label>
        <input type="text" placeholder="enter your id" name="id" required><br/>
        <label for=""><b>Mot de passe</b></label>
        <input type="password" placeholder="enter your password " name="pw" required>
        <input type="submit" id='submit' value='LOGIN' >
        <p class="box-register">Vous êtes nouveau ici? 
  <a href="inscription.php">S'inscrire</a>
 
  </form>

</section>




</body>
</html>

<?php
}
?>