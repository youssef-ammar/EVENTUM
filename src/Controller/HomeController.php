<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home_v.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/base", name="base")
     */
    public function indexBase(): Response
    {
        return $this->render('contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
