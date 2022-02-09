<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyProjectsController extends AbstractController
{
    /**
     * @Route("/myprojects", name="myprojects")
     */
    public function myprojects(): Response
    {
        return $this->render("myprojects/myprojects.html.twig");
    }
}