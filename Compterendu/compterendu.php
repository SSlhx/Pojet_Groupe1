<html>
    <head>
	<title>formulaire RAPPORT_VISITE</title>
	<link href="compterendu.css">
</head>
<body>
<div name="haut" style="margin: 2 2 2 2 ;height:6%;"><h1>Gestion des visites</h1></div>
<div name="droite" >
	<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:77AADD;color:white;height:88%;">
		<form name="compterendu" method="post" action="traitement_CR.php">
			<h1> Rapport de visite </h1>
			<label class="titre">NUMERO :</label><input type="text" size="10" name="RAP_NUM" class="zone" /></br>
			<label class="titre">PRATICIEN :</label><input type="text"  name="PRAT_NOM" class="zone" ></input></br>
			<label class="titre">DATE :</label><input type="text" size="19" name="RAP_DATE" class="zone" /></br>
			<label class="titre">MOTIF :</label><select  name="RAP_MOTIF" class="zone" ></br>
											<option value="PRD">Périodicité</option>
											<option value="ACT">Actualisation</option>
											<option value="REL">Relance</option>
											<option value="SOL">Sollicitation praticien</option>
											<option value="AUT">Autre</option>
										</select></br>
			<label class="titre">BILAN :</label><textarea rows="5" cols="50" name="RAP_BILAN" class="zone" ></textarea></br>
			<label class="titre"></label><div class="zone"><input type="reset" value="annuler"></input><input type="submit" id='submit'></input></br>
		</form>
	</div>
</div>
</body>
</html>