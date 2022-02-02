<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * @Route("/reset")
 */
class ResetController extends AbstractController
{
    /**
     * @Route("/resetpassword/{email}", name="resetpassword", methods={"GET","POST"})
     */
    public function resetPassword(Request $request, UserRepository $userRepository): Response
    {   
        $getEmailUrl = $request->get('email');
        $userName = $request->request->get('userName');
        $password = $request->request->get('password');
        $error = false;
        $errorCtrl = false;

        if($userName != null){
            $user = $userRepository->findOneBy(['email' => $getEmailUrl]);
            $getUserIdentifier = $user->getUserIdentifier();
            if (!$user) {
                $error = true;
            } else {
                if($getUserIdentifier == $userName){
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $user->setPassword($passwordHash);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($user);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
                } else {
                    $errorCtrl = true;
                }
            }
        }

        return $this->render('user/edit.html.twig',[
            'error'=>$error,
            'errorCtrl'=> $errorCtrl
        ]);
    }

    /**
     * @Route("/resetemail", name="resetemail", methods={"GET","POST"})
     */
    public function resetemail(MailerInterface $mailer, Request $request): Response
    {
        $getEmail = $request->request->get('email');
        $success = false;
        if($getEmail){
            $email = (new Email())
                ->from('contact.peurou@gmail.com')
                ->to($getEmail)
                ->subject('Réinitialisation mot de passe Snowtricks')
                ->html('<h4>Vous souhaitez réinitialiser votre mot de passe Snowtricks?</h4><a href="http://127.0.0.1/P6ElouanPeurou/P6ElouanPeurou/public/reset/resetpassword/'.$getEmail.'">Cliqué ici!</a> ');

            $mailer->send($email);
            $success = true;
        }

        return $this->render('user/email.html.twig',[
            'success'=>$success
        ]);
    }
}