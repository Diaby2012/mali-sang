<?php
session_start();
include_once('include/connexion.php');

$req = $bdd->prepare('SELECT COUNT(id) FROM users WHERE numero_mobile = ?');
$req->execute(array($_POST['numero_mobile']));
$res = $req->fetch();
$numero = $_POST['numero_mobile'];

if($res[0] == 0)
{
    $req = $bdd->prepare('UPDATE users SET nom_donneur = ?, ville = ?, numero_mobile = ?, groupe_sanguin = ?, type_contact = ?, horaire_contact = ?
                 WHERE numero_mobile = ?');
    $req->execute(array($_POST['nom_donneur'],
                        $_POST['ville'],
                        $_POST['numero_mobile'],
                        $_POST['groupe_sanguin'],
                        $_POST['type_contact'],
                        $_POST['horaire_contact'],
                        $_POST['numero_mobile']));

    header('Location:profil.php');
}
else
{
    echo "Inscription impossible car le numero ".$_POST['numero_mobile']. "est déjà utilisé";
}
