<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\User;

use App\Form\NewsType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news_list")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository(News::class)->findAll();

        return $this->render('news/index.html.twig', [
          'news' => $news
        ]);
    }

    /**
     * @Route("/news/new", name="news_creation")
     */
    public function new(Request $request)
    {
        $news = new News();
        $currentDate = new \DateTime();

        $em = $this->getDoctrine()->getManager();
        $author = $em->getRepository(User::class)->findOneBy([
          'id' => 1
        ]);

        // Create form
        $form = $this->createForm(NewsType::class, $news);

        // Create request
        $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {
          $news->setAuthor($author);
          $news->setPublishedAt($currentDate);

          $em->persist($news);
          $em->flush();

          // Return to home page
          return $this->redirectToRoute('news_list');
        }

        return $this->render('news/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
