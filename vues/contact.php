<?php
include'includes/enteteAccueil.php';
include'includes/navbar.php';

?>

<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1>
                    Contactez-nous <small>N'hésitez pas à nous laisser un message</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm col-md-offset-3 col-md-12">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choisissez-en un :</option>
                                <option value="service">Service clientèle général</option>
                                <option value="suggestions">Suggestions</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer le message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
<!--
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Notre bureau</legend>
            <address>
                <strong>Weebelule, Inc.</strong><br>
                Adresse<br>
                Ville, CP<br>
                <abbr title="Phone">
                    Téléphone:</abbr>
                (33) ...
            </address>
            <address>
                <strong>Exemple</strong><br>
                <a href="mailto:#">exemple@weebelule.fr</a>
            </address>
            </form>
        </div>
-->
    </div>
</div>


<?php
include'includes/footer.php';
include'includes/piedPageAccueil.php';

?>