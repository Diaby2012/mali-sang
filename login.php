<?php
    include_once ('include/nav.php');
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4>Connexion</h4>
                <div class="row">
                    <form  method="POST" action="login.func.php" class="col-lg-offset-3 col-lg-6 col-md-offset-3">
                        <div class="form-group">
                            <span id="confirmNumero" class="confirmNumero"></span>
                            <input type="text" class="form-control" name="numero_mobile" id="numero_mobile" onkeyup="checkNumero(); return false;" placeholder="Numéro donneur">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>
                        <button type="submit" value="Connexion" name="submit" class="btn btn-default">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

<?php include_once('include/footer.php');