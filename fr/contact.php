<?php include 'header.php' ?>
<!-- WRAPPER -->
<div id="wrapper" style="padding-top:160px;">
    <section class="container">
        <h1 class="accent">Contactez-nous</h1>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="box match">
                    <div style="width: 100%; height: 350px; background: url('/images/servicesmenu/conveyers/mine-et-carrieres.jpg') center center no-repeat; background-position: cover;"></div>
                  <style>
                    .gm-style .place-card {
                      opacity: 0 !important;
                    }
                  </style>
                  <div class="padding">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>LM MANUTENTIONS</h4>
                                <hr class="sep" style="margin-top: 0;">
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <div class="address">
                                    C.P. 2698 <br>
                                    Morin Height, Québec <br>
                                    J0R 1H0
                                    <br><br>
                                    <a href="tel:1-450-226-8777"><i class="fa fa-phone"></i><span class="space-10"></span>1-450-226-8777</a> <br>
                                    <a href="mailto:info@lmmanutentions.com"><i class="fa fa-envelope" stye="width: 30px;"></i><span class="space-10"></span>info@lmmanutentions.com</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <br>
                                <div class="row" style="font-size: 13px; line-height: 17px;">
                                    <div class="col-xs-4">Lundi</div>
                                    <div class="col-xs-8 text-right">8:30–12:00 et 13:00-16:30</div>
                                    <div class="col-xs-4">Mardi</div>
                                    <div class="col-xs-8 text-right">8:30–12:00 et 13:00-16:30</div>
                                    <div class="col-xs-4">Mercredi</div>
                                    <div class="col-xs-8 text-right">8:30–12:00 et 13:00-16:30</div>
                                    <div class="col-xs-4">Jeudi</div>
                                    <div class="col-xs-8 text-right">8:30–12:00 et 13:00-16:30</div>
                                    <div class="col-xs-4">Vendredi</div>
                                    <div class="col-xs-8 text-right">8:30–12:00</div>
                                    <div class="col-xs-4">Samedi</div>
                                    <div class="col-xs-8 text-right">Fermé</div>
                                    <div class="col-xs-4">Dimanche</div>
                                    <div class="col-xs-8 text-right">Fermé</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box padding match">
                    <p>
                        Vous souhaitez obtenir plus de renseignements sur nos services ? Contactez notre équipe de spécialistes !
                    </p>

                    <form id="contact" role="form" method="post">

                        <div id="invalidHandler"></div>

                        <fieldset>
                            <div class="form-group">
                                <label for="name" class="control-label">*Nom</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">*Courriel</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="tel" class="control-label">Téléphone</label>
                                <input type="text" class="form-control" name="tel" id="tel">
                            </div>
                            <div class="form-group">
                                <label for="message" class="control-label">*Message</label>
                                <textarea class="form-control" rows="5" name="message" id="message"></textarea>
                            </div>
                            <div class="margin-0 form-group text-right">
                                <button type="submit" name="save" class="btn new-btn new-btn-dark">
                                    Envoyer
                                </button>
                                <img src="//images/loading_blue.gif" class="submit-spin" id="submitSpin" alt="">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /WRAPPER -->
<?php include 'footer.php' ?>