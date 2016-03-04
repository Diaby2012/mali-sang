<?php
session_start();
include_once ('include/nav.php');
include_once ('profil.php');
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
                        <td>Type de contact</td>
                        <td>Horaire de contact</td>
                    </tr>
                    <?php while($donnees = $req->fetch())
                    {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($donnees['nom_donneur']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['ville']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['numero_mobile']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['groupe_sanguin']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['type_contact']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['horaire_contact']); ?></td>
                        <td><a href="update.php?id="$_SESSION['id']">Modifier</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </header>

<?php include_once('include/footer.php');