<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home1")
     * @Route("/home", name="home2")
     */
    public function home(): Response
    {
        return $this->render("home/home.html.twig");
    }
}