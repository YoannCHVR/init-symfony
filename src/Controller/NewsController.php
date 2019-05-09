<?php

namespace App\Controller;

use App\Entity\News;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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

        return $this->render('news.html.twig', [
          'news' => $news
        ]);
    }
}
