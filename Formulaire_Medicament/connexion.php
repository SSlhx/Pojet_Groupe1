<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_gestion_compte_rendu;charset=utf8','root','');
}
catch (Exception $e)
{
    die('Erreur :'. $e->getMessage());
}
?>