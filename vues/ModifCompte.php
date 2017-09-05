<?php
include'includes/enteteAccueil.php';
include'includes/navbarDeconnect.php';

?>
           <div class="container">
            <h1>Modifier mon profil</h1>
            <hr>
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                        <h6>Télécharger une autre photo...</h6>

                        <input type="file" class="form-control">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <!--
<div class="alert alert-info alert-dismissable">
<a class="panel-close close" data-dismiss="alert">×</a> 
<i class="fa fa-coffee"></i>
C'est une <strong>.alerte</strong>. Utilisez ceci pour afficher des messages importants à l'utilisateur.
</div>
-->
                    <h3>Informations personnelles</h3>

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Prénom :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="Jane">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nom :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="Bishop">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email :</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" value="janesemail@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nom d'utilisateur :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" value="janeuser">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mot de passe :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirmer le mot de passe :</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="11111122333">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="button" class="btn btn-primary" value="Sauvegarder les modifications">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Annuler">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        
<?php
include'includes/footer.php';
include'includes/piedPageAccueil.php';

?>       