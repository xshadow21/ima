<?php include 'header.php' ?>
<div id="wrapper" style="padding-top:160px;">
    <section class="container">
        <h1 class="accent">Demander Une Soumission</h1>
        <br><br>
    <form id="quote" role="quote" method="post" class="box padding">
        <div id="invalidHandler"></div>
        <fieldset>
            <div class="form-group">
                <label for="name" class="control-label">Nom*</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Courriel*</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="tel" class="control-label">Téléphone*</label>
                <input type="text" class="form-control" name="tel" id="tel">
            </div>

            <div class="form-group">
                <label for="company" class="control-label">Entreprise*</label>
                <input type="text" class="form-control" name="company" id="company">
            </div>

            <div class="form-group">
                <label for="address" class="control-label">Adresse*</label>
                <input type="text" class="form-control" name="address" id="address">
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    <label for="city" class="control-label">Ville*</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>

                <div class="form-group col-sm-4">
                    <label for="province" class="control-label">Province*</label>
                    <input type="text" class="form-control" name="province" id="province">
                </div>

                <div class="form-group col-sm-4">
                    <label for="postal" class="control-label">Code Postal*</label>
                    <input type="text" class="form-control" name="postal" id="postal">
                </div>
            </div>

            <div class="form-group">
                <p>Je préfère être contacté par :</p>
                <label for="prefer-courriel" class="control-label">email</label>
                <input type="radio" name="preference" class="form-control" value="courriel" id="prefer-courriel" checked>
                <label for="prefer-phone" class="control-label">phone</label>
                <input type="radio" name="preference" class="form-control" value="phone" id="prefer-phone">
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="industry" class="control-label">Secteur d’activité*</label>
                    <input type="text" class="form-control" name="industry" id="industry">
                </div>
                <div class="form-group col-sm-6">
                    <label for="promate" class="control-label">Produit et/ou matériel*</label>
                    <input type="text" class="form-control" name="promate" id="promate">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="control-label">Message*</label>
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
    </section>
</div>
<?php include 'footer.php' ?>