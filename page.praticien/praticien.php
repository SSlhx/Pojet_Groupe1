<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>

<!-- LIENS POUR AJOUTER TAILWIND ELEMENT (EX: CAROUSEL) -->
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>
<link  rel="stylesheet" href="praticien.css"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praticien</title>
    
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
<form action="praticien_traitement.php" method="POST">
    <div class="formulaire">
        <h1>Praticien</h1>
        <label for="">Nom du praticien : </label><input type="text" name="nom_pr" require><br/>
        <label for="">Prénom du praticien : </label><input type="text" name="prenom_pr" require><br/>
        <label for="">Adresse : </label><input type="text" name="adresse"require><br/>
        <label for="">Code Postal : </label><input type="text" name="CP" require><br/>
        <label for="">Ville : </label><input type="text" name="ville" require><br/>
        <label for="">région :</label><br/>
        <select name="lstPrat" class="titre">
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
      <input class="submit" type="submit" name="submit">
    </div>
    
</section>
</body>
</html>

