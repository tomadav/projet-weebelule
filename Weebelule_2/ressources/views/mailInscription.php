<?php
//script mailInscription.php
$titrePage = 'Bio Villefranche - Contactez-nous';
include 'includes/header.php';
//récupération de la bibliothèque PHPMailer
require 'includes/phpmailer/PHPMailerAutoload.php';

//Mr Propre
$safe = array_map('strip_tags',$_POST);
$mail = new PHPMailer; //nouvel objet de type mail
$mail->isSMTP(); //connexion directe au serveur SMTP
$mail->isHTML(true); //Utilisation du format HTML
$mail->Host = 'smtp.gmail.com'; //Le serveur de messagerie
$mail->Port = 465; //port obligatoire de google
$mail->SMTPAuth = true; //on va fournir login/password
$mail->SMTPSecure = 'ssl'; //Certificat SSL
$mail->Username = 'wf3villefranche@gmail.com'; //utilisateur SMTP
$mail->Password = 'Azerty1234'; //mdp utilisateur SMTP
$mail->setFrom('wf3villefranche@gmail.com','Bio Villefranche'); //l'expéditeur du mail
$mail->addAddress('bensahlataletyoussef@gmail.com'); //le destinataire
$mail->Subject = 'Message de '.$safe['prenom'].' '.$safe['nom'];
$mail->Body = '<html>
                    <head>
                        <style>
                            h1{color: green; }
                        </style>
                    </head>
                    <body>
                        <h1>Message de '.$safe['email'].'</h1>
                        <p>'.$safe['message'].'</p>
                    </body>
                </html>'; //le corps du mail
if(!$mail->send()) //si l'envoi délire
{
    echo '<p class="alert alert-danger">
            Erreur envoi '.$mail-ErrorInfo
        .'</p>';
}
else echo '<p class="alert alert-succes">Votre message a bien été envoyé. Merci.</p>';
/* BON APPETIT */

//pied de page
include 'includes/footer.php';
?>
