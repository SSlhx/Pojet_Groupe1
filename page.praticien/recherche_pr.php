<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>

<!-- LIENS POUR AJOUTER TAILWIND ELEMENT (EX: CAROUSEL) -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
<link  rel="stylesheet" href="recherche.css"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche d'un practicien</title>
</head>
<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
   
      <span class="ml-3 text-xl">Logo</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900">First Link</a>
      <a class="mr-5 hover:text-gray-900">Second Link</a>
      <a class="mr-5 hover:text-gray-900">Third Link</a>
      <a class="mr-5 hover:text-gray-900">Fourth Link</a>
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Button
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>

<section>

<h1 class="text-4xl text-center">Trouver votre practicien</h1></br>
<form action="recherche_pr.php" method="POST">
    <div class="formulaire">
    <select name="lstPrat" class="titre" require>
				<option class="text-center">Choisissez la région</option>
				<option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
				<option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
				<option value="Bretagne">Bretagne</option>
        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
        <option value="Grand Est">Grand Est</option>
        <option value="Hauts-de-France">Hauts-de-France</option>
        <option value="Ile-de-France">Ile-de-France</option>
        <option value="Normandie">Normandie</option>
        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
        <option value="Occitanie">Occitanie</option>
        <option value="Pays de la Loire">Pays de la Loire</option>
        <option value="Provence-Alpes-Côte d’Azur">Provence-Alpes-Côte d’Azur</option>
			</select>	
      <input type="submit" value="Rechercher">
      <?php

      include 'connexion.php';
      $region = $_POST['lstPrat'];
      if (isset($_POST['lstPrat'])){
      $reponse = $bdd->query('SELECT * FROM practiciens ORDER BY Nom_praticiens  ASC ');
    
      while ($donnees = $reponse->fetch())
      {
       
  ?>
  <section>
      <p> <?php echo htmlspecialchars($donnees['Nom_praticiens']) ; 
     } }?>
         
    </div>
</section>
</body>
</html>