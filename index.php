<?php include_once ("include/nav.php")?>
    <!-- Header -->
    <header>
        <div class="container">
           <div class="row">
                <h4>Trouver un Donneur</h4>
                <hr>
                <form class="row" method="GET" action="recherche.php">
                    <div class="col-lg-5 form-group">
                        <label>Ville</label>
                        <select class="form-control" name="ville">
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
                    <div class="col-lg-5 form-group">
                        <label>Groupe Sanguin</label>
                        <select class="form-control" name="groupe_sanguin">
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
                    <div class="col-lg-2 form-group">
                        <label>-----</label>
                        <input type="submit" name="button" value="Rechercher" class="form-control">
                    </div>
                </form>
            </div>
            <div class="row">
                    <div class="col-xs-3 col-md-offset-2 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin O-"><h5>O-</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin O+"><h5>O+</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin B-"><h5>B-</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin B+"><h5>B+</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin A-"><h5>A-</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin A+"><h5>A+</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin AB+"><h5>AB+</h5></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/profile.png" alt="groupe sanguin AB+"><h5>AB-</h5></div>
                    <div class="col-xs-12 col-md-offset-2"></div>
            </div>
            <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                        <h5>Donneur</h5>
                        <h2>A+</h2>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                        <h5>Donneur</h5>
                        <h2>o-</h2>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                        <h5>Donneur</h5>
                        <h2>AB+</h2>
                    </div><!-- /.col-lg-4 -->
            </div>
    </header>

    <!-- inscription Grid Section -->
    <section id="inscription">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>Inscription d'un nouveau donneur</h4>
                    <div class="row">
                        <form  method="POST" action="inscription.php" class="col-lg-offset-3 col-lg-6 col-md-offset-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom_donneur" id="nom_donneur" placeholder="Nom donneur">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                                <span id="confirmMessage" class="confirmMessage"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="repeat_password" id="repeat_password" onkeyup="checkPass(); return false;" placeholder="Répéter mot de passe">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ville">
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
                                <input type="text" class="form-control" name="numero_mobile" id="numero_mobile" placeholder="Numéro Mobile">
                            </div>
                            <div class="form-group">
                                <label for="groupe_sanguin">Groupe sanguin</label>
                                <select class="form-control" name="groupe_sanguin">
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
                                <label for="groupe_sanguin">Type de contact</label>
                                <select class="form-control" name="type_contact">
                                    <option>SMS</option>
                                    <option>Apppel</option>
                                    <option>SMS-Appel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="groupe_sanguin">Horaire de Contact</label>
                                <select class="form-control" name="horaire_contact">
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

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Contact Moi</h3>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Veuillez saisir notre nom.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Veuillez saisir notre mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Numéro mobile</label>
                                <input type="tel" class="form-control" placeholder="Numéro" id="phone" required data-validation-required-message="Veuillez saisir notre numéro mobile.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Veuillez saisir notre message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ("include/footer.php")?>