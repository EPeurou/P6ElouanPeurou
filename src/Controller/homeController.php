<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tricks;

class homeController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function homepage(): Response
    {
        $tricks = $this->getDoctrine()
            ->getRepository(Tricks::class)
            ->findAll();

            // dd($tricks);
        return $this->render('index.html.twig',[
            'tricks' => $tricks
        ]);
    }
}
