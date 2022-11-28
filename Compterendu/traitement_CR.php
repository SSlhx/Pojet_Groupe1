<?php 


include 'connexion.php';

if(isset ($_POST['RAP_NUM'], $_POST["PRAT_NOM"], $_POST["RAP_DATE"], $_POST["RAP_MOTIF"], $_POST["RAP_BILAN"],));



$NUM_RAP = htmlspecialchars($_POST["RAP_NUM"]);
$NOM_PRAT = htmlspecialchars($_POST["PRAT_NOM"]);
$DATE_RAP = htmlspecialchars($_POST["RAP_DATE"]);
$MOTIF_RAP = htmlspecialchars($_POST["RAP_MOTIF"]);
$BILAN_RAP = htmlspecialchars($_POST["RAP_BILAN"]);




//$req = $bdd -> prepare('INSERT INTO form_visit(RAP_NUM, RAP_DATEVISITE, PRA_NUM,PRA_COEFF, PRA_REMPLACANT, RAP_DATE, RAP_MOTIFAUTRE, RAP_BILAN, PROD1, PROD2, RAP_DOC, PRA_ECH1, PRA_QTE1, RAP_LOCK) VALUES('.$_POST['RAP_NUM'].''.$_POST["RAP_DATEVISITE"].''.$_POST["PRA_NUM"].''.$_POST["PRA_COEFF"].''.$_POST["PRA_REMPLACANT"].''.$_POST["RAP_DATE"].''.$_POST["RAP_MOTIFAUTRE"].''.$_POST["RAP_BILAN"].''.$_POST["PROD1"].''.$_POST["PROD2"].''.$_POST["RAP_DOC"].''.$_POST["PRA_ECH1"].''.$_POST["PRA_QTE1"].''.$_POST["RAP_LOCK"].')');

$req = $bdd -> prepare('INSERT INTO form_visite(num_rap, praticien, date, motif, bilan) VALUES(:a, :b, :c, :d, :e)'); //insert dans la table utilisateur le pseudo et le message
$req -> execute(array('a' => $NUM_RAP, 'b' => $NOM_PRAT ,'c'=>$DATE_RAP,'d'=>$MOTIF_RAP,'e'=>$BILAN_RAP));
header('location: compterendu.php');
?>