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
                ->get('/', 'App\Controller\IndexController::indexAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('home');

            # Page d'inscription
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/inscription', 'App\Controller\IndexController::inscriptionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('weebelule_inscription');

                $controllers
                  ->post('/inscription','App\Controller\IndexController::inscriptionPost')
                  ->bind('weebelule_inscription_post');

            # Page de connexion
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/connexion', 'App\Controller\IndexController::connexionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('weebelule_connexion');

                $controllers
                  ->post('/connexion','App\Controller\IndexController::connexionGet')
                  ->bind('weebelule_connexion_get');


            # Page de publication d'Annonce
            $controllers
            # On associe une Route à un Controller et une Action
            ->get('/annonce', 'App\Controller\IndexController::annonceAction')
            # En option je peux donner un nom à la route, qui servira plus tard
            # pour la créations de lien : "controller_action"
            ->bind('weebelule_annonce_post');


        # On retourne la liste des controllers (ControllerCollection)
        return $controllers;

    }
}
