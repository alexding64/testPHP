<?php

function creeCompte($db,$prenom,$nom,$email,$tel,$datenaissance,$genre,$mdpinsc){
    $requete = "INSERT INTO user VALUES(NULL, '$prenom', '$nom', '$email', '$tel', '$datenaissance', '$genre', '$mdpinsc') ";
    mysqli_query($db,$requete);
    setcookie("Utilisateur",mysqli_insert_id($db),time()+3600,'/');     //Insertion de l'utilisateur dans la base de donnée et connexion de se dernier
}

?>

