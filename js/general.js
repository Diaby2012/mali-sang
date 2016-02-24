function inscription(){
    var nomdonneur = document.getElementById('nom_donneur');
    var message = document.getElementById('confirmNom');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if (nomdonneur.value.length < 5 || nomdonneur.value == "") {
        nomdonneur.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Nom de donneur doit être supérieur à 5 caractères";
        nomdonneur.focus();
        return false;
    }else{
        nomdonneur.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        nomdonneur.focus();
        return true;
    }

    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('repeat_password');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    if (pass1.value == "" || pass1.value.length < 8){
        pass1.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "le mot de passe doit supérieur à 8 caractères";
        pass1.focus();
        return false;
    }else{
        pass1.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        pass1.focus();
        return true;
    }

    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Mot de passe correct"
        pass1.focus();
        return true;
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Saisir le même de mot de passe!";
        pass1.focus();
        return false;
    }

    var numero = document.getElementById('numero_mobile');
    var message = document.getElementById('confirmNumero');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    var chkZ = 1;
    for(i=0; i<numero.value.length; ++i)
        if(numero.value.charAt(i) < "0"
            || numero.value.charAt(i) > "9")
            chkZ = -1;
    if(chkZ == -1)
    {
        message.innerHTML = "Veuillez saisir des chiffres";
        numero.focus();
        return false;
    }

    if ( numero.value.length == 8)
    {
        numero.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Numéro Correct";
        numero.focus();
        return true;
    }else{
        numero.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Numéro doit comporté 8 chiffres";
        numero.focus();
        return false;
    }
}

/*function checkNom() {

    var nomdonneur = document.getElementById('nom_donneur');
    var message = document.getElementById('confirmNom');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if (nomdonneur.value.length < 5 || nomdonneur.value == "") {
         nomdonneur.style.backgroundColor = badColor;
         message.style.color = badColor;
         message.innerHTML = "Nom de donneur doit être supérieur à 5 caractères";
         nomdonneur.focus();
         return false;
         }else{
         nomdonneur.style.backgroundColor = goodColor;
         message.style.color = goodColor;
         nomdonneur.focus();
         return true;
         }
}*/

/* function checkPass()
 {
 var pass1 = document.getElementById('password');
 var pass2 = document.getElementById('repeat_password');
 var message = document.getElementById('confirmMessage');
 var goodColor = "#66cc66";
 var badColor = "#ff6666";

     if (pass1.value == "" || pass1.value.length < 8){
         pass1.style.backgroundColor = badColor;
         message.style.color = badColor;
         message.innerHTML = "le mot de passe doit supérieur à 8 caractères";
         pass1.focus();
         return false;
     }else{
         pass1.style.backgroundColor = goodColor;
         message.style.color = goodColor;
         pass1.focus();
         return true;
     }

     if(pass1.value == pass2.value){
     pass2.style.backgroundColor = goodColor;
     message.style.color = goodColor;
     message.innerHTML = "Mot de passe correct"
     pass1.focus();
     return true;
     }else{
     pass2.style.backgroundColor = badColor;
     message.style.color = badColor;
     message.innerHTML = "Saisir le même de mot de passe!";
     pass1.focus();
     return false;
     }
 }*/

/*function checkNumero()
{
    var numero = document.getElementById('numero_mobile');
    var message = document.getElementById('confirmNumero');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    var chkZ = 1;
    for(i=0; i<numero.value.length; ++i)
        if(numero.value.charAt(i) < "0"
            || numero.value.charAt(i) > "9")
            chkZ = -1;
    if(chkZ == -1)
    {
        message.innerHTML = "Veuillez saisir des chiffres";
        numero.focus();
        return false;
    }

    if ( numero.value.length == 8)
    {
        numero.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Numéro Correct";
        numero.focus();
        return true;
    }else{
        numero.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Numéro doit comporté 8 chiffres";
        numero.focus();
        return false;
    }

}*/

function valider(){
        var ville = document.formulaire.ville;
        var groupe = document.formulaire.groupe_sanguin;
        var message = document.getElementById('ConfirRecherche');
        var message1 = document.getElementById('ConfirRecherche1');
        var badColor = "#921e12";
    if (ville.value == "Choisir une ville"){
        message.style.backgroundColor = "#d62c1a";
        message.innerHTML = "Veuillez choisir une ville !";
        valid = false;
        return valid;
    }
    if (groupe.value == "Choisir un groupe sanguin") {
        message1.style.backgroundColor = "#d62c1a";
        message1.innerHTML = "Veuillez choisir un groupe sanguin !";
        valid = false;
        return valid;
    }
}

