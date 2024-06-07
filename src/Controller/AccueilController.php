<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="app_accueil")
     */
    public function accueil(): Response
    {
        $user = ["Patience", "Kori"];
        $items = ["Hehe", "Ngaha"];
        return $this->render("accueil/accueil.html.twig", [
            "koko_name" => 'Yes papa',
            "user" => $user,
            "items" => $items
        ]);
    }
   
    
}
