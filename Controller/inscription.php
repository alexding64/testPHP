<?php

extract($_POST);

include_once('../Model/inscription.php');

$bd = mysqli_connect("localhost","root","root","testPHP") or die("erreur de connexion");

$datenaissance = $annee . "/" . $mois . "/" . $jour;

if(preg_match('/[0-9]{10}/',$telemail)) creeCompte($bd,$prenom,$nom,NULL,$telemail,$datenaissance,$genre,$mdpinsc);
if(preg_match('/.+@.+\..+/',$telemail)) creeCompte($bd,$prenom,$nom,$telemail,NULL,$datenaissance,$genre,$mdpinsc);

header("Location: ../index.php");
?>