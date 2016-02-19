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
                <caption>Resultat de la recherche Groupe :<strong><?php echo $_POST['groupe_sanguin'];?></strong> et Ville: <strong><?php echo $_POST['ville'];?></strong></caption>
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
                        <td><?php echo $donnees['nom_donneur']; ?></td>
                        <td><?php echo $_POST['ville']; ?></td>
                        <td><?php echo $donnees['numero_mobile']; ?></td>
                        <td><?php echo $donnees['type_contact']; ?></td>
                        <td><?php echo $donnees['horaire_contact']; ?></td>
                        </tr>
                    <?php
                    }?>
            </table>
        </div>
        <div class="col-lg-4">compte facebook du site</div>
     </div>
</header>
<?php include ("include/footer.php")?>
