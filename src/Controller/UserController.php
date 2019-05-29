<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\UserType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig');
    }

    /**
     * @Route("/user/new", name="user_new", methods="GET|POST")
     */
    public function new(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // Init. variable
        $user = new User();

        // Create form
        $form = $this->createForm(UserType::class, $user);

        // Create request
        $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {

          // Get password to check requirement
          $password = $user->getPassword();

          // Encode Password
          $user->setPassword($encoder->encodePassword($user, $password));

          // #######
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();

          // Return to home page
          return $this->redirectToRoute('home');
        }

        // Render page Registration (new user)
        return $this->render('user/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
