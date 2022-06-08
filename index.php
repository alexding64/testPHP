<?php 

extract($_POST);
if($_COOKIE["Utilisateur"]==null) include_once "View/accueil.php";
else include_once "View/profil.html";

?>