function confFormat(){
    var x = document.getElementById("telemail");
    if(x.value=="") return;
}

function confirmMail(){
    var x = document.getElementById("avertissementconf"); 
    var base = document.getElementById("telemail"); 
    var copie = document.getElementById("conftelemail"); 
    x.style.color = "red";
    if(copie.value!="" && copie.value != base.value) {
        x.textContent = "Votre numéro de mobile ou email n'est pas le même dans les deux champs.";
        document.getElementById("btnInscription").disabled=true;
    }
    else {
        x.textContent = "";
        document.getElementById("btnInscription").disabled=false;
    }
}

function verifMdp(){
    var x = document.getElementById("avertissementmdp"); 
    var mdp = document.getElementById("mdpinsc");
    x.style.color = "red";
    if(mdp.value.length<10) {
        x.textContent = "Votre mot de passe est trop court (10 caractères minimum)!";
        document.getElementById("btnInscription").disabled=true;
    }
    else {
        x.textContent = "";
        document.getElementById("btnInscription").disabled=false;
    }
}
