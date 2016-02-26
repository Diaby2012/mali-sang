<?php
	session_start();

	include_once ('include/connexion.php');

	if(!empty($_POST))
    {
        if(!empty($_POST['numero_mobile']) && !empty($_POST['password']))
        {
            if(isset($_POST['numero_mobile'], $_POST['password']))
            {
                $password = sha1($_POST['password']);
                $req = $bdd->prepare('SELECT id,numero_mobile FROM users WHERE  numero_mobile = ? AND password = ? ');
                $req->execute(array($_POST['numero_mobile'],$password));
                $donnees = $req->fetch();
                if($donnees[0] == 0)
                {
                    header ('location: login.php');
                }else{
                    $_SESSION['numero_mobile'] = $donnees['numero_mobile'];
                    $_SESSION['id'] = $donnees['id'];
                    header ('location: index.php');
                }

            }
        }
    }