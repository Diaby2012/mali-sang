<?php
session_start();
include_once('include/connexion.php');

    /*function VerifierPassword($password, $repeat_password)
    {
       global $bdd;
        $req = $bdd->prepare('SELECT ')
    }*/
    function VerifierNumero($numero)
    {
        global $bdd;
        $req = $bdd->prepare('SELECT COUNT(id) FROM users WHERE numero_mobile = ?');
        $req->execute(array($numero));
        $res = $req->fetch();
        return $res > 0;
    }

/*  if(!VerifierNumero($_POST['numero_mobile'])){
     echo "exixte pas";
  }else{
      echo "existe";
  }*/


/*if($_POST['password']!= $_POST['repeat_password'])
{
    echo "Saisir le même mot de passe";
}else{
    $req = $bdd->prepare('INSERT INTO users(nom_donneur, password, ville, numero_mobile, groupe_sanguin, type_contact, horaire_contact)
                      VALUES(:nom_donneur, :password, :ville, :numero_mobile, :groupe_sanguin, :type_contact, :horaire_contact)');
    $req->execute(array(
        'nom_donneur' => $_POST['nom_donneur'],
        'password' => sha1($_POST['password']),
        'ville' => $_POST['ville'],
        'numero_mobile' => $_POST['numero_mobile'],
        'groupe_sanguin' => $_POST['groupe_sanguin'],
        'type_contact' => $_POST['type_contact'],
        'horaire_contact' => $_POST['horaire_contact']));

    header('Location:index.php');
}*/
