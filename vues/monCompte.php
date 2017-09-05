<?php
include'includes/enteteAccueil.php';
include'includes/navbarDeconnect.php';

?>
                  
        <div class="container">
            <h1> Mon compte</h1>
    <div class="row profile">
		<div class=" col-md-offset-3 col-md-6">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/user.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Nom Weeber
					</div>
					<div class="profile-usertitle-qualite">
						Expert
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Mes messages</button>
					
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-download-alt"></i>
							Ajouter une annonce </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-eye-open"></i>
							Voir mes annonces </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-euro"></i>
							Achat weebs </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							Mes weebs </a>
						</li>
						<li>
							<a href="ModifCompte.php">
							<i class="glyphicon glyphicon-cog"></i>
							Modifier mon profil </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
<!--
		<div class="col-md-9">
            <div class="profile-content">
			   Contenus liés aux utilisateurs ici...
            </div>
		</div>
-->
	</div>
</div>



<?php
include'includes/footer.php';
include'includes/piedPageAccueil.php';

?>