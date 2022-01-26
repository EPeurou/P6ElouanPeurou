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

/**
 * @Route("/reset")
 */
class ResetController extends AbstractController
{
    /**
     * @Route("/", name="reset", methods={"GET","POST"})
     */
    public function resetPassword(Request $request, UserRepository $userRepository): Response
    {
        $userName = $request->request->get('userName');
        $password = $request->request->get('password');
        $error = false;

        if($userName != null){
            $user = $userRepository->findOneBy(['userName' => $userName]);
            if (!$user) {
                $error = true;
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $user->setPassword($passwordHash);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('user/edit.html.twig',[
            'error'=>$error
        ]);
    }
}