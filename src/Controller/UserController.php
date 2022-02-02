<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
 
    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(MailerInterface $mailer, Request $request, UserRepository $userRepository): Response
    {
        $this->userRepository = $userRepository;
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $success = false;
        $error = false;
        if ($form->isSubmitted() && $form->isValid()) {
            $getEmail = $form->get('email')->getData();
            $getUserName = $form->get('userName')->getData();
            $password = $form->get('password')->getData();
            $findEmail = $this->userRepository->findOneBy(['email' => $getEmail]);
            $findUserName = $this->userRepository->findOneBy(['userName' => $getUserName]);
            if (!$findEmail && !$findUserName){
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $user->setPassword($passwordHash);
                $user->setValidate(0);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();
                $getUserId = $user->getId();
                
                if($getEmail){
                    $email = (new Email())
                        ->from('contact.peurou@gmail.com')
                        ->to($getEmail)
                        ->subject('Inscription Snowtricks')
                        ->html('<h4>Vous souhaitez vous inscrire sur Snowtricks?</h4><a href="http://127.0.0.1/P6ElouanPeurou/P6ElouanPeurou/public/user/emailCheck/'.$getUserId.'">Cliqué ici!</a> ');
        
                    $mailer->send($email);
                    $success = true;
                }
            } else {
                $error = true;
            }
        }

        return $this->renderForm('user/register.html.twig', [
            'user' => $user,
            'form' => $form,
            'success' => $success,
            'error' => $error
        ]);
    }

    /**
     * @Route("/emailCheck/{id}", name="emailCheck", methods={"GET"})
     */
    public function emailCheck(Request $request,UserRepository $userRepository): Response
    {
        $this->userRepository = $userRepository;
        $id = (int)$request->get('id');
        // dd($id);
        $user = $this->userRepository->findOneBy(['id' => $id]);
        $user->setValidate(1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('confirm', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/confirm", name="confirm", methods={"GET"})
     */
    public function confirm(): Response
    {
        return $this->render('user/confirm.html.twig');
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }


    // /**
    //  * @Route("{id}/edit", name="user_edit", methods={"GET","POST"})
    //  */
    // public function edit(Request $request, User $user, UserRepository $userRepository): Response
    // {
    //     // $form = $this->createForm(UserType::class, $user);
    //     // $form->handleRequest($request);

    //     // if ($form->isSubmitted() && $form->isValid()) {
    //     //     $this->getDoctrine()->getManager()->flush();

    //     //     return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    //     // }

    //     return $this->renderForm('user/edit.html.twig', [
    //         'user' => $user,
    //         // 'form' => $form,
    //     ]);
    // }

    


    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }
}
