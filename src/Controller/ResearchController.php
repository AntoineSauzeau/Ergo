<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResearchController extends AbstractController
{
    /**
     * @Route("/research", name="research")
     */
    public function research(): Response
    {
        return $this->render("research/research.html.twig");
    }
}