<?php

//=====Création du header de l'e-mail

$header = "From: \"WeaponsB\"<bensahlataletyoussef@gmail.com>".$passage_ligne;

$header .= "Reply-to: \"WeaponsB\" <bensahlataletyoussef@gmail.com>".$passage_ligne;

$header .= "MIME-Version: 1.0".$passage_ligne;

$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

?>
