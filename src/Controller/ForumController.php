<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends AbstractController
{
    /**
     * @Route("/forum", name="forum")
     */
    public function forum(): Response
    {
        $forums=0;
        return $this->render('Front/Forum/forum.html.twig', [
             forums=> $forums,
        ]);
    }
}
