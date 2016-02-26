<?php

session_start();
include_once ('include/connexion.php');

/*if( isset($_SESSION['numero_mobile']))
{
    $numero_mobile = $_SESSION['numero_mobile'];
    $req = $bdd->query('SELECT * FROM users WHERE numero_mobile = ?');
    $req->execute(array($numero_mobile));
 }*/

header ('location: profil.view.php');
