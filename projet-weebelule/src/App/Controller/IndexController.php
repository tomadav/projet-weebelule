<?php
namespace App\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;

class IndexController
{
    /**
     * Affichage de la Page d'Accueil
     * @return Symfony\Component\HttpFoundation\Response;
     */
    public function indexAction(Application $app, Request $request){

          $form = $app['form.factory']->createBuilder(FormType::class)
          ->add('EMAILUSER', EmailType::class, [
              'required'      =>  true,
              'label'         =>  false,
              'constraints'   =>  array(new NotBlank()),
              'attr'          =>  [
                  'class'         => 'form-control',
                  'placeholder'   => 'Saisissez votre email',
                  'autocomplete'  => 'new-password'
                ]
          ])
          ->add('MDPUSER', PasswordType::class, [
              'required'      =>  true,
              'label'         =>  false,
              'constraints'   =>  array(new NotBlank()),
              'attr'          =>  [
                  'class'         => 'form-control',
                  'placeholder'   => '***',
                  'autocomplete'  => 'new-password'
              ]
          ])
          ->add('submit', SubmitType::class, [
              'label'     => 'Connexion',
              'attr'      =>  [
                  'class'     => 'btn btn-block btn-primary'
              ]
          ])
          ->getForm();

          $form->handleRequest($request);

          if($form->isValid()) :

              $admin = $form->getData();

              $isMailInDb = $app['idiorm.db']->for_table('user')
              ->where(array(
                  'EMAILUSER'     => $admin['EMAILUSER'],
                  'MDPUSER'  => $app['security.encoder.digest']->encodePassword($admin['MDPUSER'], '')
                  ))
              ->find_one();
                    if(!$isMailInDb) :

                    return $app['twig']->render('index.html.twig', [
                      'form'      => $form->createView(),
                      'error'     => 'Identifiant et/ou mot de passe incorrect !'
                    ]);
                    // return print_r($isMailInDb);
                    else :
                      return $app['twig']->render('connected.html.twig',[
                        'form'    => $form->createView(),
                        'error'   => ''
                      ]);

                    endif;


          endif;

          return $app['twig']->render('index.html.twig', [
              'form'      => $form->createView(),
              'error'     => ''
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
    /**
     * Affichage de la Page de CGU
     */
    public function cguAction(Application $app) {

        # Affichage dans la Vue
        return $app['twig']->render('cgu.html.twig');
    }
}
