<?php

namespace App\Controller;

// use App\Service\FileUploader;
// use App\Entity\Media;
use App\Entity\Tricks;
use App\Form\TricksType;
use App\Repository\TricksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/tricks")
 */
class TricksController extends AbstractController
{
    /**
     * @Route("/", name="tricks_index", methods={"GET"})
     */
    public function index(TricksRepository $tricksRepository): Response
    {
        return $this->render('tricks/index.html.twig', [
            'tricks' => $tricksRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tricks_new", methods={"GET","POST"})
     */
    public function new(Request $request, SluggerInterface $slugger): Response
    {
        $trick = new Tricks();
        $form = $this->createForm(TricksType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $medias */
            $medias = $form->get('media')->getData();
            // dd($medias);
            if ($medias) {
                foreach ($medias as $media) {    
                    // $originalFilename = pathinfo($media->getClientOriginalName(), PATHINFO_FILENAME);
                    // $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = uniqid().'.'.$media->guessExtension();
                    // $mediaFileName = $fileUploader->upload($mediaFile);
                    // $trick->setMedia($mediaFileName);
                    try {
                        $media->move(
                            $this->getParameter('upload_directory'),
                            $newFilename
                        );
                        } catch (FileException $e) {
                            // ... handle exception if something happens during file upload
                        }
                    $trick->setMedia($newFilename);
                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();

            return $this->redirectToRoute('tricks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tricks/new.html.twig', [
            'trick' => $trick,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="tricks_show", methods={"GET"})
     */
    public function show(Tricks $trick): Response
    {
        return $this->render('tricks/show.html.twig', [
            'trick' => $trick,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tricks_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tricks $trick): Response
    {
        $form = $this->createForm(TricksType::class, $trick);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tricks_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tricks/edit.html.twig', [
            'trick' => $trick,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="tricks_delete", methods={"POST"})
     */
    public function delete(Request $request, Tricks $trick): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trick->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trick);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tricks_index', [], Response::HTTP_SEE_OTHER);
    }
}
