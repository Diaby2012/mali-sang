<!-- Header -->
    <header>
        <div class="container">
           <div class="row">
               <div class="col-xs-12 col-md-offset-3 col-md-6"><a href="index.php"><img class="logo" src="img/logo2.png" alt="logo mali sang"></a></div>
           </div>
            <h2>Trouver un Donneur au MaLi</h2>
           <div class="row">
                <form class="row" method="POST" action="recherche.php" name="formulaire" onsubmit="return valider ();">
                    <div class="col-lg-offset-1 col-lg-4 form-group">
                        <span id="ConfirRecherche" class="ConfirRecherche"></span>
                        <select class="form-control " name="ville" id="ville">
                            <!--<option>Choisir la Ville</option>-->
                            <option selected="true" style="display:none;";>Choisir une ville</option>
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
                    <div class="col-lg-4 form-group">
                        <span id="ConfirRecherche1" class="ConfirRecherche1"></span>
                        <select class="form-control" name="groupe_sanguin">
                            <option selected="true" style="display:none;">Choisir un groupe sanguin</option>
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
                    <input type="submit" name="button" value="Rechercher" class="form-control">
                    </div>
                    <div class="col-lg-1"></div>
                </form>
            </div>
            <div class="row">
                <h4>Nombre de donneur potentiel</h4>
                <div class="panel panel-default col-xs-12 col-md-offset-1 col-md-10" >
                    <div class="col-xs-3 col-md-offset-2 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_o.png" alt="groupe sanguin O-"><span>50</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_o2.png" alt="groupe sanguin O+"><span>120</span> </div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_b.png" alt="groupe sanguin B-"><span>120</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_b2.png" alt="groupe sanguin B+"><span>500</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_a.png" alt="groupe sanguin A-"><span>15</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_a2.png" alt="groupe sanguin A+"><span>65</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_ab.png" alt="groupe sanguin AB-"><span>200</span></div>
                    <div class="col-xs-3 col-md-1"><img class="img-responsive" src="img/groupe_sanguin_ab2.png" alt="groupe sanguin AB+"><span>80</span></div>
                    <div class="col-xs-12 col-md-offset-2"></div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <!--<div class="row">
                    <div class="col-lg-4">
                <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                <h5>Donneur</h5>
                <h2>A+</h2>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                <h5>Donneur</h5>
                <h2>o-</h2>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/donneur.png" alt="image donneur de sang" width="120" height="120">
                <h5>Donneur</h5>
                <h2>AB+</h2>
            </div>
        </div>-->
    </header>