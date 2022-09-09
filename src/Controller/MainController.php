<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_index')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/about', name: 'main_about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}

/*
* Créer la route permettant d'accéder à la liste des jeux référencés sur la plateforme.
* Créer la route permettant d'accéder à la fiche d'un jeu.
* Créer la route permettant d'accéder à la page de connexion et la page d'inscription.
* Créer la route vers une page A propos.
*/
