<?php
namespace Weebelule\Controller;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Silex\Application;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class AdminController
{
  use Shortcut;

  /**
   * Affichage de la page 'Ajouter une annonce'
   */
   public function addAnnonceAction(Application $app, Request $request)
   {
     # Récupérer la liste des utilisateurs ayant déposé une annonce
     $users = function() use($app)
     {
       # Récupération des utilisateurs dans la BDD
       $users = $app['idiorm.db']->for_table('user')->find_result_set();

       # possibilité de formater l'affichage pour un champ select

       return $array;
     };

     # Récupérer la liste des catégories
     $categories = function() use($app)
     {

       # Récupération des catégories dans la BDD
       $categories = $app['idiorm.db']->for_table('categorie')->find_result_set();

       # possibilité de formater l'affichage pour un champ select

       return $array;
     };

     # Création Formulaire permettant l'ajout d'une annonce
     $form = $app['form.factory']->createBuilder(FormType::class)

     ->add('TITREANNONCE', TextType::class, [

                'required'      =>  true,
                'label'         =>  false,
                'constraints'   =>  array(new NotBlank()),
                'attr'          =>  [
                    'class'         => 'form-control',
                    'placeholder'   => 'Titre de l\'Annonce...'
                ]
            ])

            ->add('IDUSER', ChoiceType::class, [

                'choices'   => $users(),
                'expanded'  => false,
                'multiple'  => false,
                'label'     => false,
                'attr'          =>  [
                    'class'         => 'form-control'
                ]
            ])

            ->add('IDCATEGORIE', ChoiceType::class, [

                'choices'   => $categories(),
                'expanded'  => false,
                'multiple'  => false,
                'label'     => false,
                'attr'          =>  [
                    'class'         => 'form-control'
                ]
            ])

            ->add('CONTENUANNONCE', TextareaType::class, [

                'required'      =>  true,
                'label'         =>  false,
                'constraints'   =>  array(new NotBlank()),
                'attr'          =>  [
                    'class'         => 'form-control'
                ]
            ])

            ->add('PHOTOANNONCE', FileType::class, [

                'required'      =>  false,
                'label'         =>  false,
                'attr'          =>  [
                    'class'         => 'dropify'
                ]
            ])

            ->add('VALEURANNONCE', CheckboxType::class, [
                'required' => false,
                'label'    => false
            ])

            ->add('submit', SubmitType::class, ['label' => 'Publier'])

            ->getForm();

            # Traitement des données POST
            $form->handleRequest($request);

            if($form->isValid()) :

            # Récupération des données du Formulaire
            $annonce = $form->getData();

            # Récupération de l'image
            $image  = $annonce['PHOTOANNONCE'];
            $chemin = PATH_PUBLIC.'/assets/images/product/';
            $image->move($chemin, $this->generateSlug($annonce['TITREANNONCE']).'.jpg');

            # Insertion en BDD
            $annonceDb  = $app['idiorm.db']->for_table('annonce')->create();
            $categorie  = $app['idiorm.db']->for_table('categorie')->find_one($annonce['IDCATEGORIE']);

            # On associe les coloinnes de notre BDD avec les valeurs du Formulaire
            #Colonne mySQL                      # Valeurs Formulaire
            $annonceDb->IDAUTEUR               =   $annonce['IDAUTEUR'];
            $annonceDb->IDCATEGORIE            =   $annonce['IDCATEGORIE'];
            $annonceDb->TITREANNONCE           =   $annonce['TITREANNONCE'];
            $annonceDb->CONTENUANNONCE         =   $annonce['CONTENUANNONCE'];
            $annonceDb->VALEURANNONCE          =   $annonce['VALEURANNONCE'];
            $annonceDb->FEATUREDIMAGEANNONCE   =   $this->generateSlug($annonce['TITREANNONCE']).'.jpg';

            # Insertion en BDD
            $annonceDb->save();

            # Redirection
            return $app->redirect( $app['url_generator']->generate('technews_annonce', [
                'libellecategorie'  => strtolower($categorie->LIBELLECATEGORIE),
                'idannonce'         => $annonceDb->IDANNONCE,
                'slugannonce'       => $this->generateSlug($annonce['TITREANNONCE'])
            ]) );


       endif;

       # Affichage du Formulaire dans la Vue
       return $app['twig']->render('admin/ajouterannonce.html.twig', [
           'form' => $form->createView()
       ]);

   }
}
