<?php
namespace App\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    /**
     * Affichage de la Page d'Accueil
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function indexAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Mon Application Silex !';

        # Affichage dans la Vue
        return $app['twig']->render('index.html.twig',[
            'message'  => $message
        ]);
    }
    /**
     * Affichage de la Page Connexion
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function connexionAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Ma page de connexion !';

        # Affichage dans la Vue
        return $app['twig']->render('connexion.html.twig',[
          'error'=> "",
          "last_username"=>""
        ]);
    }

    /**
     * Affichage de la Page d'inscription
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function inscriptionAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Ma page d\'inscription !';

        # Affichage dans la Vue
        return $app['twig']->render('inscription.html.twig',[
          'error'=> "",
          "last_username"=>""
        ]);
    }

    /**
     * Affichage de la Page des FAQ
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function faqAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Mon Application Silex !';

        # Affichage dans la Vue
        return $app['twig']->render('faq.html.twig',[
            'message'  => $message
        ]);
    }

    /**
     * Affichage de la Page des Mentions légales
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function mentionsAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Mon Application Silex !';

        # Affichage dans la Vue
        return $app['twig']->render('mentions.html.twig',[
            'message'  => $message
        ]);
    }

    /**
     * Affichage de la Page Comment ça marche
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function ccmAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Mon Application Silex !';

        # Affichage dans la Vue
        return $app['twig']->render('ccm.html.twig',[
            'message'  => $message
        ]);
    }

    /**
     * Affichage de la Page Comment ça marche
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function contactAction(Application $app, Request $request) {

        if($request->isMethod('POST')) :

          $message = \Swift_Message::newInstance()
         ->setSubject('[YourSite] Feedback')
         ->setFrom(array('noreply@weebelule.fr'))
         ->setTo(array('feedback@weebelule.fr'))
         ->setBody($request->get('message'));

           $app['mailer']->send($message);

        endif;

        # Affichage dans la Vue
        return $app['twig']->render('contact.html.twig',[
            'message'  => $message
        ]);
    }

    /**
     * Affichage de la Page Con ditions générales Utilisation
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function cguAction(Application $app) {

        # Déclaration d'un Message
        $message = 'Mon Application Silex !';

        # Affichage dans la Vue
        return $app['twig']->render('cgu.html.twig',[
            'message'  => $message
        ]);
    }

}
