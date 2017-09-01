<?php
include'includes/enteteAccueil.php';
include'includes/navbarInscription.php';

?>

<div class="container">

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1> Inscription GRATUITE<br/> <small> Merci de renseigner tous les champs </small></h1>
        </div>
    </div>
    
    <div class="well well-sm col-md-offset-3 col-md-6">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Prénom">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="Password">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Mot de passe">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Vpassword">Vérification mot de passe</label>
                <input type="password" class="form-control" id="vpassword" placeholder="Vérification mot de passe">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                <input type="text" class="form-control" placeholder="Téléphone" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon glyphicon glyphicon-globe"></span>
                <input type="text" class="form-control" placeholder="Adresse" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    </div>

    <br/>
    <div class="row">
        <div class="col-md-offset-5 col-md-2">
            <button type="button" class="btn btn-primary">Envoyer mes informations</button>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</body>

<?php
include'includes/footer.php';
include'includes/piedPageAccueil.php';

?>

