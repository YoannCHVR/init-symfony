<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/DefaultController.php',
        // ]);

        return $this->render('base.html.twig');
    }

    /**
     * @Route("/pizzas", name="pizzas_list")
     */
    public function pizzasAction()
    {
        return $this->render('pizzas.html.twig', [
            'pizzas' => [
                '4 fromages', 'Reine', 'Paysanne'
            ]
        ]);
    }
}
