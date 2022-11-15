<?php

include 'connexion.php';

if (isset($_POST['nom_pr'],$_POST['prenom_pr'], $_POST['adresse'], $_POST['CP'], $_POST['ville'], $_POST['lstPrat'] )) 
  {
    $nom_pr = $_POST['nom_pr'];
    $prenom_pr = $_POST['prenom_pr'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['CP'];
    $ville = $_POST['ville'];
    $region =  $_POST['lstPrat'];

    $req = $bdd->prepare('INSERT INTO practiciens (Nom_praticiens, Prenom_praticiens, Adresse_praticiens, CP_praticiens, Ville_praticiens, region_practiciens) VALUES(:a, :b, :c, :d, :e, :f)');

    $req->execute(array('a' => $nom_pr, 'b' => $prenom_pr, 'c' => $adresse, 'd' => $cp, 'e' => $ville, 'f' => $region));
    header('Location: praticien.php');
  }
?>