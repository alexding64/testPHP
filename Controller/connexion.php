<?php

extract($_POST);
include_once('../Model/connexion.php');
$bd = mysqli_connect("localhost","root","root","testPHP") or die("erreur de connexion");

connexionCompte($bd,$login,$mdpco);

header("Location: ../index.php");

?>
