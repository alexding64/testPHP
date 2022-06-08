<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="View/style.css">
    <script src="View/script.js"></script>
</head>
<body>
    <div class="connexion">
        <form action="Controller/connexion.php" method="post">
            <table>
                <tr>
                    <td>Adresse e-mail ou mobile</td>
                    <td>Mot de passe</td>
                </tr>
                <tr>
                    <td><input type="text" autocomplete="off" name="login" id="login" placeholder="Votre login" required></td>
                    <td><input type="text" autocomplete="off" name="mdpco" id="mdpco" placeholder="Votre mot de passe" required></td>
                    <td><input id="btnConnexion" type="submit" value="Connexion"></td> 
                </tr>
                <tr>
                    <td><?php if($_GET["failed"]==1) echo "<div>Login ou mot de passe erroné!</div>"; ?></td>
                    <td><a class="recup" href="#"> Informations de compte oubliées ? </a></td> 
                </tr>
            </table>
        </form>
    </div>

    <div class="inscription">
        <form action="Controller/inscription.php" method="post">
            <h1>Inscription</h1>
            <h2>C'est gratuit (et ça le restera toujours)</h2>

            <table>
                <tr>
                    <td><input type="text" autocomplete ="off" name="prenom" id="prenom" placeholder="Prénom" required></td>
                    <td><input class="remplie" type="text" autocomplete ="off" name="nom" id="nom" placeholder="Nom de famille" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="remplie" type="text" autocomplete ="off" name="telemail" id="telemail" onkeyup="confirmMail()" onBlur="confFormat()"placeholder="Numéro de mobile ou email" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="remplie" type="text" autocomplete ="off" name="conftelemail" id="conftelemail" onkeyup="confirmMail()" placeholder="Confirmation numéro de mobile ou email" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="remplie" type="text" autocomplete ="off" name="mdpinsc" id="mdpinsc" onBlur="verifMdp()" placeholder="Nouveau mot de passe" required>
                    <p id="avertissementmdp"></p>
                    <p id="avertissementconf"></p></td>
                </tr>
            </table>
            
            <h2> Date de naissance </h2>
            <div class="naissance">
                <input type="number" name="jour" id="jour" min="1" max="31" placeholder="Jour" required>
                <input type="number" name="mois" id="mois" min="1" max="12" placeholder="Mois" required>
                <input type="number" name="annee" id="annee" min="1900" max="2022" placeholder="Année" required>
                <a class="qnaissance" href="#">Pourquoi indiquer ma date de naissance ?</a>
            </div>
            <div>
                <input type="radio" name="genre" id="genref" value="Femme"><label for="genref">Femme</label>
                <input type="radio" name="genre" id="genrem" value="Homme"><label for="genrem">Homme</label>
            </div>
            <div class="cgu">
                <p>En cliquant sur Inscription, vous acceptez nos <a href="#"> Conditions </a> et indiquez que vous avez lu notre
                    <a href="#">Politique d'utilisation des données</a>, y compris notre <a href="#">Utilisation des cookies</a>. 
                    Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.
                </p>
            </div>
            <input id="btnInscription" type="submit" value="Inscription">
        </form>
    </div>
</body>
<html> 