<?php
session_start();
include_once('include/connexion.php');
function verifierPassword($password, $repeat_password)
{

}

if($_POST['password']!= $_POST['repeat_password'])
{
    
}
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