<?php
session_start();
include_once('include/connexion.php');

        $req = $bdd->prepare('SELECT COUNT(id) FROM users WHERE numero_mobile = ?');
        $req->execute(array($_POST['numero_mobile']));
        $res = $req->fetch();

        if($res[0] == 0)
        {
            echo "nexiste pas";
        }
        else
        {
            echo "existe";
        }

    /*if(!VerifierNumero($_POST['numero_mobile'])){
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
     }else{
        echo "inscription impossible car numero déja utilisé !!";
    }*/

