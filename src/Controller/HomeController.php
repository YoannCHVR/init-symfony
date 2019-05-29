<?php

namespace App\Controller;

use App\Entity\Article;

use App\Form\ArticleType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        // $locale = $request->getLocale();

        $limitPost = 3;

        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository(Article::class)->findBy(
          [],
          ['PublishedAt'=> 'DESC'],
          $limitPost
        );

        return $this->render('home/index.html.twig', [
          'articles' => $articles
        ]);
    }
}
