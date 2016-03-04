<?php
/**
 * Created by PhpStorm.
 * User: DSD
 * Date: 03/03/2016
 * Time: 13:18
 */
session_start();
include_once ('include/nav.php');
include_once ('include/connexion.php');
echo $_SESSION['nom_donneur'];
?>
    <!-- Update data -->
    <section id="inscription">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>MODIFIER MES INFORMATIONS</h4>
                    <div class="row">
                        <form  method="POST" action="update.func.php" class="col-lg-offset-3 col-lg-6 col-md-offset-3">
                            <div class="form-group">
                                <span class="confirmNom"></span>
                                <input type="text" class="form-control" name="nom_donneur" id="nom_donneur" value="<?php echo  $_SESSION['nom_donneur'];?>">
                            </div>
                            <div class="form-group">
                                <select placeholder="select your beverage" class="form-control" name="ville"  >
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
                                <input type="text" class="form-control" name="numero_mobile" id="numero_mobile" onkeyup="checkNumero(); return false;" placeholder="<?php echo  $_SESSION['numero_mobile'];?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="groupe_sanguin">
                                    <option selected="true" style="display:none;"><?php echo $_SESSION['groupe_sanguin'];?></option>
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
                                    <option selected="true" style="display:none;"><?php echo $_SESSION['type_contact'];?>t</option>
                                    <option>SMS</option>
                                    <option>Apppel</option>
                                    <option>SMS-Appel</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="horaire_contact">
                                    <option selected="true" style="display:none;"><?php echo $_SESSION['horaire_contact'];?></option>
                                    <option>24/24</option>
                                    <option>Entre 8h et 18h</option>
                                    <option>Entre 19h et 23h</option>
                                </select>
                            </div>
                            <button type="submit" value="Inscription" name="submit" id="inscription" class="btn btn-default">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once('include/footer.php');