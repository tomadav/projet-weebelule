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

            # Page des FAQ
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/faq', 'App\Controller\IndexController::faqAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_faq');

            # Page des CGU
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/cgu', 'App\Controller\IndexController::cguAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_cgu');

            # Page des Mentions légales
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/mentions', 'App\Controller\IndexController::mentionsAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_mentions');

            # Page Comment ça marche
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/ccm', 'App\Controller\IndexController::ccmAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_ccm');

            # Page de connexion
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/connexion', 'App\Controller\IndexController::connexionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_connexion');

            # Page de contact
            $controllers
                # On associe une Route à un Controller et une Action
                ->match('/contact', 'App\Controller\IndexController::contactAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->method('GET|POST')
                ->bind('projet-weebelule_contact');

            # Page d'inscription
            $controllers
                # On associe une Route à un Controller et une Action
                ->get('/inscription', 'App\Controller\IndexController::inscriptionAction')
                # En option je peux donner un nom à la route, qui servira plus tard
                # pour la créations de lien : "controller_action"
                ->bind('projet-weebelule_inscription');

            $controllers
                ->post('/inscription', 'App\Controller\IndexController::inscriptionPost')
                ->bind('weebelule_inscription_post');

        # On retourne la liste des controllers (ControllerCollection)
        return $controllers;

    }
}
