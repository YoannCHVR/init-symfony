<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\User;

use App\Form\ArticleType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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

        $articles = $em->getRepository(Article::class)->findBy(
          [], //obligatoire pour afficher de la base de données en ASC ou DESC
          ['PublishedAt'=> 'DESC']
        );

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
        $sessionUser = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository(User::class)->findOneBy([
          'id' => $sessionUser,
          'admin' => 1
        ]);

        // Check if current user is an admin
        if ( !$author ) {
          // Redirect to Home page
          return $this->redirectToRoute('home');
        }

        $priority_articles = [];

        for ($i = 1; $i <= 3; $i++) {
          $priority_article = $em->getRepository(Article::class)->findOneBy(
            ['Priority' => $i]
          );

          array_push($priority_articles, $priority_article);
        }

        // Create form
        $form = $this->createForm(ArticleType::class, $article);

        // Create request
        $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {
          $priority = $form->get('priority')->getData();

          $already_took_priority = $em->getRepository(Article::class)->findOneBy(
            ['Priority' => $priority]
          );

          if ($already_took_priority) {
            $already_took_priority->setPriority(NULL);

            $em->persist($already_took_priority);
          }

          $article->setAuthor($author);

          // Get Image in file type
          $imageArticle = $form->get('image')->getData();

          if ( $imageArticle ) {
            // Generate name file and add extension
            $imageName = md5(uniqid()) .'.' . $imageArticle->guessExtension();
            // Makes image in your public folder
            $imageArticle->move($this->getParameter('image_article_upload_path'), $imageName);
            // Add it for database
            $article->setImage($imageName);
          }

          // Get File in file type
          $fileArticle = $form->get('file')->getData();

          if ( $fileArticle ) {
            // Generate name file and add extension
            $fileName = md5(uniqid()) .'.' . $fileArticle->guessExtension();
            // Makes image in your public folder
            $fileArticle->move($this->getParameter('file_article_upload_path'), $fileName);
            // Add it for database
            $article->setFile($fileName);
          }

          $article->setPublishedAt($currentDate);

          $em->persist($article);
          $em->flush();

          // Return to home page
          return $this->redirectToRoute('article_list');
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView(),
            'priority_articles' => $priority_articles
        ]);
    }

    /**
     * @Route("/article/edit/{id}", name="edit_article")
     */
    public function edit(
      Request $request,
      Article $article
    )
    {
        // Init. variable
        $em = $this->getDoctrine()->getManager();

        $sessionUser = $this->getUser();

        $author = $em->getRepository(User::class)->findOneBy([
          'id' => $sessionUser,
          'admin' => true
        ]);

        // Check if current user is an admin
        if ( !$author ) {
          // Redirect to Home page
          return $this->redirectToRoute('home');
        }

        $priority_articles = [];

        for ($i = 1; $i <= 3; $i++) {
          $priority_article = $em->getRepository(Article::class)->findOneBy(
            ['Priority' => $i]
          );

          array_push($priority_articles, $priority_article);
        }

        // Set article's image/file in a var to get it later if the field isn't changed
        $image = $article->getImage();
        $file = $article->getFile();

        // Create form
        $form = $this->createForm(ArticleType::class, $article);

        // Reset image field on required false when edit
        $form->add('image', FileType::class, [
          'required' => false,
          'data_class' => null
        ]);

        // Create request
        $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {

            // Get Image in file type
            $imageArticle = $form->get('image')->getData();

            if ( !$imageArticle ) {
              // Add it for database
              $article->setImage($image);
            } else {
              // Generate name file and add extension
              $imageName = md5(uniqid()) .'.' . $imageArticle->guessExtension();
              // Makes image in your public folder
              $imageArticle->move($this->getParameter('image_article_upload_path'), $imageName);
              // Add it for database
              $article->setImage($imageName);
            }

            // Get File in file type
            $fileArticle = $form->get('file')->getData();

            if ( !$fileArticle ) {
              // Add it for database
              $article->setFile($file);
            } else {
              // Generate name file and add extension
              $fileName = md5(uniqid()) .'.' . $fileArticle->guessExtension();
              // Makes image in your public folder
              $fileArticle->move($this->getParameter('file_article_upload_path'), $fileName);
              // Add it for database
              $article->setFile($fileName);
            }

            $em->flush();


            // Redirect to Show mission
            return $this->redirectToRoute('article_list');
        }

        // Render page Mission Edit
        return $this->render('article/edit.html.twig', [
            'form' => $form->createView(),
            'priority_articles' => $priority_articles
        ]);
    }

}
