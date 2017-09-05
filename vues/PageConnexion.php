<?php
include'includes/enteteAccueil.php';
include'includes/navbarConnect.php';

?>
        
    <div class="container">
                   <h1>Connectez-vous <small>pour continuer</small></h1>
        <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <div class="account-wall">
<!--
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
-->
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Mot de passe" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Se connecter</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Se souvenir de moi
                </label>
                <a href="#" class="pull-right need-help">Besoin d'aide ? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="inscription.html" class="text-center new-account btn btn-warning">Créer un compte </a>
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

