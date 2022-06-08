<?php

function connexionCompte($db,$telemail,$mdp){
    
    $requete = "SELECT id_user FROM user WHERE (mail = '$telemail' OR telephone = '$telemail') AND mdp = '$mdp'";   //Requete pour chercher l'utilisateur
    $resultat = mysqli_query($db, $requete);
    if(mysqli_num_rows($resultat) == 1){
        $row = mysqli_fetch_assoc($resultat);
        setcookie("Utilisateur",$row['id_user'],time()+3600,'/');   //On créer un cookie pour se souvenir de l'utilisateur
    }
    else{
        header("Location: ../index.php?failed=1");      //On va recharger la page avec un message d'erreur en plus
    }
}

function deconnectionCompte(){
    if (isset($_COOKIE['Utilisateur'])) {       //On unset le cookie pour se déconnecter
        unset($_COOKIE['Utilisateur']); 
        setcookie('Utilisateur', null, -1, '/'); 
        return true;
    } else {
        return false;
    }
}
?>
