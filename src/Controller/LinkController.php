<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LinkController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('home_v.html.twig');
    }
    /**
     * @Route("/travel", name="travel")
     */
    public function travel(): Response
    {
        return $this->render('travel.html.twig');
    }
    /**
     * @Route("/camping", name="camping")
     */
    public function camp(): Response
    {
        return $this->render('camping.html.twig');
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(): Response
    {
        return $this->render('add_event.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }
    /**
     * @Route("/details", name="details")
     */
    public function eventDetails(): Response
    {
        return $this->render('Event_details.html.twig');
    }
    /**
     * @Route("/register", name="register")
     */
    public function register(): Response
    {
        return $this->render('register.html.twig');
    }
    /**
     * @Route("/error", name="error")
     */
    public function error(): Response
    {
        return $this->render('error.html.twig');
    }
    /**
     * @Route("/event", name="event")
     */
    public function event(): Response
    {
        return $this->render('event.html.twig');
    }


}
