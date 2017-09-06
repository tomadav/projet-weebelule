<?php

namespace App\Provider;

use Silex\Api\ControllerProviderInterface;

class IndexControllerProvider implements ControllerProviderInterface {

    /**
     * {@inheritDoc}
     * @see \Silex\Api\ControllerProviderInterface::connect()
     */
    public function connect(\Silex\Application $app)
    {

        # : Créer une instance de Silex\ControllerCollection
        # : https://silex.symfony.com/api/master/Silex/ControllerCollection.html
        $controllers = $app['controllers_factory'];

            # Page d'Accueil
            $controllers
                # On associe une Route à un Controller et une Action
                ->match('/', 'App\Controller\IndexController::indexAction')
                ->method('GET|POST')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('home');
          # Page de contact
          $controllers
              # On associe une Route à un Controller et une Action
              ->get('/contact', 'App\Controller\IndexController::contactAction')
              # En option je peux donner un nom à la route, qui servira plus tard
              # pour la créations de lien : "controller_action"
              ->bind('weebelule_contact');

              // # transmission des données à la BDD
              // $controllers
              //   ->post('/contact2','App\Controller\IndexController::contact2Action')
              //   ->bind('weebelule_contact_post');

          # Page FAQ
          $controllers
              # On associe une Route à un Controller et une Action
              ->get('/faq', 'App\Controller\IndexController::faqAction')
              # En option je peux donner un nom à la route, qui servira plus tard
              # pour la créations de lien : "controller_action"
              ->bind('weebelule_faq');
          # Page de Mentions Légales
          $controllers
              # On associe une Route à un Controller et une Action
              ->get('/mentions', 'App\Controller\IndexController::mentionsAction')
              # En option je peux donner un nom à la route, qui servira plus tard
              # pour la créations de lien : "controller_action"
              ->bind('weebelule_mentions');

            # Page d'inscription
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/inscription', 'App\Controller\IndexController::inscriptionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('weebelule_inscription');

                # transmission des données à la BDD
                $controllers
                  ->post('/inscription','App\Controller\IndexController::inscriptionPost')
                  ->bind('weebelule_inscription_post');


          $controllers
              ->get('/deconnexion', 'App\Controller\IndexController::deconnexionAction')
              ->bind('weebelule_deconnexion');

          #  Page de CGU
          $controllers
                ->get('/cgu', 'App\Controller\IndexController::cguAction')
                ->bind('weebelule_cgu');


            # Page de catégories
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/categorie', 'App\Controller\IndexController::categorieAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('weebelule_categorie');



            # Page d'annonce
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/annonce', 'App\Controller\IndexController::annonceAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('weebelule_annonce');


            # Page de publication d'Annonce
            $controllers
            # On associe une Route à un Controller et une Action
            ->post('/annoncePost', 'App\Controller\IndexController::annoncePostAction')
            # En option je peux donner un nom à la route, qui servira plus tard
            # pour la créations de lien : "controller_action"
            # transmission à la BDD
            ->bind('weebelule_annonce_post');


        # On retourne la liste des controllers (ControllerCollection)
        return $controllers;

    }
}
