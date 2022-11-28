<html>
<head>
	<title>formulaire MEDICAMENT</title>
    <link href="styles_Form_Med.css" rel="stylesheet">
	<style type="text/css">
/*		<!-- body {background-color: white; color:5599EE; } 
			label.titre { width : 180 ;  clear:left; float:left; } 
			.zone { width : 30car ; float : left; color:7091BB } -->*/
	</style>
</head>
<body>
<div name="haut" class="Titre" style=";margin: 2 2 2 2 ;height:6%;"><h1>Ajout Médicaments</h1></div>

<div name="droite"	class="form" >
	<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:77AADD;color:white;height:88%;">
	<form action="traitement.php" method="POST" >
		<label class="titre">DEPOT LEGAL :</label><input type="text" size="10" name="MED_DEPOTLEGAL" class="zone" /></br>
		<label class="titre">NOM COMMERCIAL :</label><input type="text" size="25" name="MED_NOMCOMMERCIAL" class="zone" /></br>
		<label class="titre">NUM COMMERCIAL :</label><input type="text"	size="25"	name="MED_NUMCOMMERCIAL" class="zone" /> </br>
		<label class="titre">FAMILLE :</label><input type="text" size="3" name="FAM_CODE" class="zone" /></br>
		<label class="titre">COMPOSITION :</label><textarea rows="5" cols="50" name="MED_COMPOSITION" class="zone" ></textarea></br>
		<label class="titre">EFFETS :</label><textarea rows="5" cols="50" name="MED_EFFETS" class="zone" ></textarea></br>
		<label class="titre">CONTRE INDIC. :</label><textarea rows="5" cols="50" name="MED_CONTREINDIC" class="zone" ></textarea></br>
		<label class="titre">PRIX ECHANTILLON :</label><input type="text" size="7" name="MED_PRIXECHANTILLON" class="zone" /></br>
        <input type="submit" id='submit'  ></br>
	</form>
	</div>
</div>
</body>
</html>
