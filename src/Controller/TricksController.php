<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tricks;
use App\Repository\TricksRepository;

class TricksController extends AbstractController
{
    // /**
    //  * @Route("/tricks", name="tricks")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('tricks/index.html.twig', [
    //         'controller_name' => 'TricksController',
    //     ]);
    // }

    // /**
    //  * @Route("/tricks", name="new")
    //  */
    // public function createTricks(): Response
    // {
    //     $entityManager = $this->getDoctrine()->getManager();

    //     $tricks = new Tricks();
    //     $tricks->setIdUser(1);
    //     $tricks->setIdType(2);
    //     $tricks->setImg();
    //     $tricks->setName('tim');
    //     $tricks->setDescription('une description');
    //     $tricks->setAuthor('a author');
    //     // $tricks->setCreation_date(2021-10-20);

    //     // tell Doctrine you want to (eventually) save the Product (no queries yet)
    //     $entityManager->persist($tricks);

    //     // actually executes the queries (i.e. the INSERT query)
    //     $entityManager->flush();

    //     return new Response('Saved new product with id '.$tricks->getId());
    // }

    /**
     * @Route("/", name="tricks_show")
     */
    // public function show(int $id): Response
    // {
    //     $tricks = $this->getDoctrine()
    //         ->getRepository(Tricks::class)
    //         ->findAll();

    //     return new Response('tricks_show/index.html.twig',[
    //         'tricks' => $tricks
    //     ]);

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    // }
}
