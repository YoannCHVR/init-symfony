<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SolutionController extends AbstractController
{
    /**
     * @Route("/solution", name="solution")
     */
    public function index()
    {
        return $this->render('solution/index.html.twig');
    }
}
