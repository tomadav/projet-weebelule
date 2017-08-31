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
                ->bind('index_index');

            # Page de connexion
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/connexion', 'App\Controller\IndexController::connexionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_connexion');

            # Page d'inscription
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/inscription', 'App\Controller\IndexController::inscriptionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_inscription');

            $controllers
                ->post('/inscription', 'weebelule\ControllerIndexController::inscriptionPost')
                ->bind('weebelule_inscription_post');

        # On retourne la liste des controllers (ControllerCollection)
        return $controllers;

    }
}
