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

        $articles = [];

        for ($i = 1; $i <= $limitPost; $i++) {
          $article = $em->getRepository(Article::class)->findOneBy(
            ['Priority' => $i]
          );

          if ($article) {
            array_push($articles, $article);
          }
        }

        if (count($articles) < $limitPost) {
          $other_articles = $em->getRepository(Article::class)->findBy(
            ['Priority' => NULL],
            ['PublishedAt'=> 'DESC']
          );

          while (count($articles) < $limitPost) {
            foreach ($other_articles as $other_article) {
              if (count($articles) < $limitPost) {
                array_push($articles, $other_article);
              }
            }
          }
        }

        return $this->render('home/index.html.twig', [
          'articles' => $articles
        ]);
    }
}
