<?php
session_start();
include_once ("include/nav.php");
include_once ("include/connexion.php");

$req = $bdd->prepare('SELECT nom_donneur, numero_mobile, type_contact, horaire_contact FROM users
                  WHERE  ville = ? AND groupe_sanguin = ? ');
$req->execute(array($_POST['ville'],$_POST['groupe_sanguin']));
?>

<header>
    <div class="container">
     <div class="row">
        <div class="col-lg-8">
            <table class="table table-striped">
                <caption>Resultat de la recherche Groupe :<strong><?php echo htmlspecialchars($_POST['groupe_sanguin']);?></strong> et Ville: <strong><?php echo htmlspecialchars($_POST['ville']);?></strong></caption>
                <tr>
                    <td>Nom</td>
                    <td>Ville</td>
                    <td>Numéro mobile</td>
                    <td>Type de contact</td>
                    <td>Horaire de contact</td>
                </tr>
                    <?php while($donnees = $req->fetch())
                    {
                    ?>  <tr>
                        <td><?php echo htmlspecialchars($donnees['nom_donneur']); ?></td>
                        <td><?php echo htmlspecialchars($_POST['ville']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['numero_mobile']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['type_contact']); ?></td>
                        <td><?php echo htmlspecialchars($donnees['horaire_contact']); ?></td>
                        </tr>
                    <?php
                    }?>
            </table>
        </div>
        <div class="col-lg-4">
            <div class="fb-page" data-href="https://www.facebook.com/malisang223/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/malisang223/"><a href="https://www.facebook.com/malisang223/">Give Blood save live Mali</a></blockquote></div></div>
        </div>
     </div>
</header>
<?php include ("include/footer.php")?>
