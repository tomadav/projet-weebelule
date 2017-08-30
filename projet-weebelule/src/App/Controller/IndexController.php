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
     * Affichage de la Page d'inscription
     */
    public function inscriptionAction(Application $app) {

        # Affichage dans la Vue
        return $app['twig']->render('inscription.html.twig');
    }

    /**
     * Affichage de la Page de connexion
     */
    public function connexionAction(Application $app) {

        # Affichage dans la Vue
        return $app['twig']->render('connexion.html.twig');
    }


    public function connexionGet(Application $app, Request $request){

      return $app['twig']->render('connected.html.twig',[
        'error'   => $app['security.last_error']($request),
        'nomuser' => $app['session']->get('_security.nomuser')
      ]);
    }

    /**
     * Traitement POST du Formulaire d'Inscription
     * use Symfony\Component\HttpFoundation\Request;
     */
    public function inscriptionPost(Application $app, Request $request) {

        # Vérification et Sécurisation des données POST
        # ...

        # Connexion à la Base de Données
        $user = $app['idiorm.db']->for_table('user')->create();

        # Affectation des valeurs
        $user->PRENOMUSER       =   $request->get('PRENOMUSER');
        $user->NOMUSER          =   $request->get('NOMUSER');
        $user->EMAILUSER        =   $request->get('EMAILUSER');
        $user->MDPUSER          =   $app['security.encoder.digest']->encodePassword($request->get('MDPUSER'), '');

        # On persiste en BDD
        $user->save();

        # On envoie un email de confirmation ou de bienvenue
        # On envoie une notification à l'administrateur
        # ...

        # On redirige l'utilisateur sur la page de connexion
        return $app->redirect('connexion?inscription=success');
    }
    /**
     * Affichage de la Page de connexion
     */
    public function annonceAction(Application $app) {

        # Affichage dans la Vue
        return $app['twig']->render('annonce.html.twig');
    }


    /**
    * Affichage des catégories dans le menu
    */
    public function menu($active, Application $app){

      # Récupération des Catégories
      $categories = $app['idiorm.db']->for_table('categorie')->find_result_set();

      # Transmission à la Vue
      return $app['twig']->render('menu.html.twig',[
        'categories'  => $categories,
        'active'      => $active
      ]);
    }

}
