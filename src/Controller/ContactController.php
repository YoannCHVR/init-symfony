<?php

namespace App\Controller;

use App\Form\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request)
    {
        // Create form
        $form = $this->createForm(ContactType::class);

        // Create request
         $form->handleRequest($request);

        // After Submit and Valid form
        if ($form->isSubmitted() && $form->isValid()) {

            function post_captcha($user_response) {
                $fields_string = '';
                $fields = array(
                    'secret' => '6Lf2G6QUAAAAAOzY3iopjTpfiNFsUVc-MQokPu5o',
                    'response' => $user_response
                );

                foreach($fields as $key=>$value) {
                  $fields_string .= $key . '=' . $value . '&';
                }

                $fields_string = rtrim($fields_string, '&');

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
                curl_setopt($ch, CURLOPT_POST, count($fields));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

                $result = curl_exec($ch);
                curl_close($ch);

                return json_decode($result, true);
            }

            // Call the function post_captcha
            $res = post_captcha($_POST['g-recaptcha-response']);

            if (!$res['success']) {
                // What happens when the CAPTCHA wasn't checked
                // Return to contact page
                return $this->redirectToRoute('errorcaptcha_message');
            }

            else {
              $data = $form->getData();

              $name = @trim(stripslashes($data['lastname']));
              $from = $data['email'];
              $entreprise = @trim(stripslashes($data['company']));
              $message = @trim(stripslashes($data['message']));
              $to = 'contact@kipers-industries.com'; //replace with your email

              $subject = 'Nouvel email de ' . $name . ' de l\'entreprise : ' . $entreprise;
              $headers = 'De: ' . $from ;
              $message    = 'Nom : ' . $name .
                            "\n \nEmail : " . $from .

                            "\n \nMessage : \n \n" . $message;


              mail($to, $subject , $message, $headers);

              // Return to contact page
              return $this->redirectToRoute('contact_sent_message');
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/contact/sent_message", name="contact_sent_message")
     */
    public function sent_message()
    {
        return $this->render('contact/sent_message.html.twig');
    }

    /**
     * @Route("/contact/errorcaptcha", name="errorcaptcha_message")
     */
    public function erorcaptcha_message()
    {
        return $this->render('contact/errorcaptcha_message.html.twig');
    }
}
