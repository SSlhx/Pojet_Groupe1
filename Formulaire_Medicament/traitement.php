<?php 

include 'connexion.php';

if(isset ($_POST['MED_DEPOTLEGAL'], $_POST["MED_NOMCOMMERCIAL"], $_POST["MED_NUMCOMMERCIAL"], $_POST["FAM_CODE"], $_POST["MED_COMPOSITION"], $_POST["MED_EFFETS"], $_POST["MED_CONTREINDIC"], $_POST["MED_PRIXECHANTILLON"])){
$DEPOTLEGAL = htmlspecialchars($_POST['MED_DEPOTLEGAL']);
$NOMCOMMERCIAL = htmlspecialchars($_POST["MED_NOMCOMMERCIAL"]);
$NUMCOMMERCIAL = htmlspecialchars($_POST["MED_NUMCOMMERCIAL"]);
$FAM = htmlspecialchars($_POST["FAM_CODE"]);
$COMPOSITION = htmlspecialchars($_POST["MED_COMPOSITION"]);
$EFFETS = htmlspecialchars($_POST["MED_EFFETS"]);
$CONTRE_INDIC = htmlspecialchars($_POST["MED_CONTREINDIC"]);
$PRIX_ECHANTILLON = htmlspecialchars($_POST["MED_PRIXECHANTILLON"]);

//$req =$bdd -> prepare('INSERT INTO form_med (depolegal, nomcommercial, numcommercial, fam_code, composition, effets, contreindic, prixechantillons) VALUES('.$_POST['MED_DEPOTLEGAL'].''.$_POST['MED_NOMCOMMERCIAL'].''.$_POST['MED_NUMCOMMERCIAL'].''.$_POST['FAM_CODE'].''.$_POST['MED_COMPOSITION'].''.$_POST['MED_EFFETS'].''.$_POST['MED_CONTREINDIC'].''.$_POST['MED_PRIXECHANTILLON'].')');

$req = $bdd -> prepare('INSERT INTO form_med(depolegal, nomcommercial, numcommercial, 	fam_code, composition, effets, contreindic, prixechantillons) VALUES(:a, :b, :c, :d, :e, :f, :g, :h)'); //insert dans la table utilisateur le pseudo et le message
$req -> execute(array(
 'a' => $DEPOTLEGAL ,'b' => $NOMCOMMERCIAL,'c' => $NUMCOMMERCIAL,'d'=>$FAM,'e'=>$COMPOSITION,'f'=>$EFFETS,'g'=>$CONTRE_INDIC,'h'=>$PRIX_ECHANTILLON));
header('location: FormMedicament.php');
echo "enregistrer";
}
 ?>