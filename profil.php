<?php

session_start();
include_once ('include/nav.php');
include_once ('include/connexion.php');

if( isset($_SESSION['numero_mobile']))
{
    $numero_mobile = $_SESSION['numero_mobile'];
    $req = $bdd->prepare('SELECT * FROM users WHERE numero_mobile = ?');
    $req->execute(array($numero_mobile));
 }
?>
<header>
        <div class="container">
            <div class="row">
                <table class="table table-striped col-lg-8">
                    <caption>Mes Informations personnelles</caption>
                    <tr>
                        <td>Nom</td>
                        <td>Ville</td>
                        <td>Numéro mobile</td>
                        <td>Groupe sanguin</td>
                        <td>Type de contact</td>
                        <td>Horaire de contact</td>
                    </tr>
                    <?php while($donnees = $req->fetch())
                    {
                        $_SESSION['id'] = $donnees['id'];
                        $_SESSION['nom_donneur'] = $donnees['nom_donneur'];
                        $_SESSION['ville'] = $donnees['ville'];
                        $_SESSION['groupe_sanguin'] = $donnees['groupe_sanguin'];
                        $_SESSION['type_contact'] = $donnees['type_contact'];
                        $_SESSION['horaire_contact'] = $donnees['horaire_contact'];
                    ?>
                    <tr>
                            <td><?php echo htmlspecialchars($donnees['nom_donneur']); ?></td>
                            <td><?php echo htmlspecialchars($donnees['ville']); ?></td>
                            <td><?php echo htmlspecialchars($donnees['numero_mobile']); ?></td>
                            <td><?php echo htmlspecialchars($donnees['groupe_sanguin']); ?></td>
                            <td><?php echo htmlspecialchars($donnees['type_contact']); ?></td>
                            <td><?php echo htmlspecialchars($donnees['horaire_contact']); ?></td>
                            <td><a href="update.php?id="$donnees['id'];">Modifier</a></td>
                    </tr>
                    <?php
                    }
                     ?>
    </table>
    </div>
    </div>
    </header>

<?php include_once('include/footer.php');