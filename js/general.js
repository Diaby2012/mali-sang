function checkPass()
{
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('repeat_password');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Mot de passe correct"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Saisir le même de mot de passe!"
    }
}
 function checkNom()
 {
     var nomdonneur = document.getElementById('nom_donneur');
     var message = document.getElementById('confirmNom');
     var goodColor = "#66cc66";
     var badColor = "#ff6666";
     if (nomdonneur.value.length < 5)
     {
         nomdonneur.style.backgroundColor = badColor;
         message.style.color = badColor;
         message.innerHTML = "Nom de donneur supérieur à 5 caractères";
     }else{
         nomdonneur.style.backgroundColor = goodColor;
         message.style.color = goodColor;
     }
 }
function checkNumero()
{
    var numero = document.getElementById('numero_mobile');
    var message = document.getElementById('confirmNumero');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if ( numero.value.length == 8)
    {
        numero.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Numéro Correct";
    }else{
        numero.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Numéro doit comporté 8 chiffres";
    }
}


