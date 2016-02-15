<?php include ("include/nav.php")?>
<header>
    <div class="container">
     <div class="row">
        <div class="col-lg-8">
            <table class="table table-striped">
                <caption>Resultat de la recherche</caption>
                <tr>
                    <td>Nom</td>
                    <td>Numéro mobile</td>
                    <td>Type de contact</td>
                    <td>Horaire de contact</td>
                </tr>

                    <?php for($i=0; $i<5; $i++)
                    {
                    ?>  <tr>
                        <td>col1</td>
                        <td>col2</td>
                        <td>col3</td>
                        <td>col4</td>
                        </tr>
                    <?php
                    }?>
            </table>
        </div>
        <div class="col-lg-4">compte facebook du site</div>
     </div>
</header>
<?php include ("include/footer.php")?>
