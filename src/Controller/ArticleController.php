<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;

use App\Form\ArticleType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article_list")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository(Article::class)->findAll();

        return $this->render('article/index.html.twig', [
          'articles' => $articles
        ]);
    }

    /**
     * @Route("/article/new", name="article_creation")
     */
    public function new(Request $request)
    {
        $article = new Article();
        $currentDate = new \DateTime();

        $em = $this->getDoctrine()->getManager();
        $author = $em->getRepository(User::class)->findOneBy([
          'id' => 1
        ]);

        // Create form
        $form = $this->createForm(ArticleType::class, $article);

        // Create request
        $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {
          $article->setAuthor($author);
          $article->setPublishedAt($currentDate);

          $em->persist($article);
          $em->flush();

          // Return to home page
          return $this->redirectToRoute('article_list');
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
