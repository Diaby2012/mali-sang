<?php
session_start();
include_once ("include/nav.php");
include_once ("include/connexion.php");

$req = $bdd->prepare('SELECT nom_donneur, ville, numero_mobile, type_contact, horaire_contact FROM users
                  WHERE  ville = ? AND groupe_sanguin = ? ');
$s = $req->execute(array($_GET['ville'],$_GET['groupe_sanguin']));

