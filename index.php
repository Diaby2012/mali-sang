<?php
session_start();
include_once ("include/nav.php");
include_once ("include/header.php");
?>
    <!-- inscription Grid Section -->
    <section id="inscription">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Inscription d'un nouveau donneur</h4>
                    <div class="row">
                        <form  method="POST" action="inscription.php" onsubmit="return inscription();" class="col-lg-offset-3 col-lg-6 col-md-offset-3">
                            <div class="form-group">
                                <span id="confirmNom" class="confirmNom"></span>
                                <input type="text" class="form-control" name="nom_donneur" id="nom_donneur"  placeholder="Nom donneur">
                            </div>
                            <div class="form-group">
                                <span id="confirmMessage" class="confirmMessage"></span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <span id="confirmMessage" class="confirmMessage"></span>
                                <input type="password" class="form-control" name="repeat_password" id="repeat_password" placeholder="Répéter mot de passe">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ville">
                                    <option selected="true" style="display:none;">Choisir une Ville</option>
                                    <option>bamako</option>
                                    <option>Sikasso</option>
                                    <option>Mopti</option>
                                    <option>Koutiala</option>
                                    <option>Kayes</option>
                                    <option>Ségou</option>
                                    <option>Nioro du Sahel</option>
                                    <option>Gao</option>
                                    <option>Tombouctou</option>
                                    <option>Kati</option>
                                    <option>ménaka</option>
                                    <option>Niono</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span id="confirmNumero" class="confirmNumero"></span>
                                <input type="text" class="form-control" name="numero_mobile" id="numero_mobile"  placeholder="Numéro Mobile">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="groupe_sanguin">
                                    <option selected="true" style="display:none;">Groupe sanguin</option>
                                    <option>O-</option>
                                    <option>O+</option>
                                    <option>B-</option>
                                    <option>B+</option>
                                    <option>A-</option>
                                    <option>A+</option>
                                    <option>AB-</option>
                                    <option>AB+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="type_contact">
                                    <option selected="true" style="display:none;">Type de contact</option>
                                    <option>SMS</option>
                                    <option>Apppel</option>
                                    <option>SMS-Appel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="horaire_contact">
                                    <option selected="true" style="display:none;">Horaire de Contact</option>
                                    <option>24/24</option>
                                    <option>Entre 8h et 18h</option>
                                    <option>Entre 19h et 23h</option>
                                </select>
                            </div>
                            <button type="submit" value="Inscription" name="submit" class="btn btn-default">Inscription</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
<?php
include_once ("include/contact.php");
include_once ("include/footer.php");
