<?php

try
{
    $con = new PDO('mysql:host=localhost;dbname=gsb_bdd;charset=utf8','root','');

} catch (Exception $e) {
    die('Erreur :'. $e->getMessage());
}
finally{

    }