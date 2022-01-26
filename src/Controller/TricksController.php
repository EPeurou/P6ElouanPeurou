<?php

namespace App\Controller;

// use App\Service\FileUploader;
use App\Entity\Comment;
use App\Entity\Tricks;
use App\Form\CommentType;
use App\Form\TricksType;
use App\Repository\TricksRepository;
use DateInterval;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

function string_between_two_string($str, $starting_word, $ending_word)
{
    $subtring_start = strpos($str, $starting_word);
    $subtring_start += strlen($starting_word);  
    $size = strpos($str, $ending_word, $subtring_start) - $subtring_start;  
    return substr($str, $subtring_start, $size);  
}

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
        $error = false;
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $medias */
            $medias = $form->get('media')->getData();
            // dd($medias);
            if ($medias) {
                $file = [];
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
                    
                    $mime_type = mime_content_type('upload/'.$newFilename);
                    $testType = strtok($mime_type, '/');
                    $addTypeName = $testType . $newFilename;
                    rename ("upload/" . $newFilename, "upload/" . $addTypeName );
                    // dd($addTypeName);
                    array_push($file, $addTypeName);
                    $trick->setMedia($file);
                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                
            }

            $mainImageGet = $form->get('mainImage')->getData();
            // dd($mainImageGet);
            if ($mainImageGet != null) {
                // dd($mainImageGet);
                $fileMainImage = [];
                // dd($mainImageGet);              
                $newFilenameMain = uniqid().'.'.$mainImageGet->guessExtension();
                try {
                    $mainImageGet->move(
                        $this->getParameter('upload_directory'), $newFilenameMain
                    );
                } catch (FileException $e) {
                }
                $mime_typeMain = mime_content_type('upload/'.$newFilenameMain);
                $testTypeMain = strtok($mime_typeMain, '/');
                $addTypeNameMain = $testTypeMain . $newFilenameMain;
                rename ("upload/" . $newFilenameMain, "upload/" . $addTypeNameMain );
                array_push($fileMainImage, $addTypeNameMain);
                $trick->setMainImage($fileMainImage);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            try {
                $entityManager->flush();
                $this->addFlash('success', 'Le trick à été modifié/ajouté avec succès!');
            } catch (\Exception $e) {
                $error = true;
                return $this->renderForm('tricks/new.html.twig', [
                    'trick' => $trick,
                    'form' => $form,
                    'error'=> $error
                ]);
            }

            return $this->redirectToRoute('main', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tricks/new.html.twig', [
            'trick' => $trick,
            'form' => $form,
            'error'=> $error
        ]);
    }

    /**
     * @Route("/{id}", name="tricks_show", methods={"GET"})
     */
    public function show(Tricks $trick, Request $request)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $comment->setTrick($trick);
            $comment->setCreationDate(new \DateTime('now'));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirect($request->getUri());
        } 
        

        
        return $this->render('tricks/show.html.twig', [
            'trick' => $trick,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/ajaxsupprmainimage", name="ajaxMainImage")
     */
    public function ajaxSupprMainImage(Request $request, Tricks $trick, $id, TricksRepository $tricksRepository)
    {
        $trickTest = $tricksRepository->findOneBy(['id'=>$id]);
        $getMedia = $trickTest->getMainImage();
        unset($getMedia[0]);
        // $getMediaAfter = $trick->getMainImage();
        $trickTest->setMainImage($getMedia);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($trickTest);
        $entityManager->flush();
        
        $respMain = new JsonResponse();
        
        // // $this->edit($request,$trick);
        return $respMain;
    }


    /**
     * @Route("/{id}/ajaxsupprmedia", name="ajax")
     */
    public function ajaxSupprMedia(Request $request, Tricks $trick, $id, TricksRepository $tricksRepository)
    {
        $trickTest = $tricksRepository->findOneBy(['id'=>$id]);
        $data = [];
        $currentMedia = $request->get('currentVal');
        $currentMediaDel = $request->get('currentValDel');
        $getMedia = $trickTest->getMedia();
        if($currentMedia != null){
            $data['currentMedia'] = $currentMedia;
            $key = array_search($currentMedia, $getMedia);
            unset($getMedia[$key]);
            unlink($this->getParameter('upload_directory').'/'.$currentMedia);
        }
        if($currentMediaDel != null){
            $data['currentMediaDel'] = $currentMediaDel;
            // dd($currentMediaDel);
            $keyDel = array_search($currentMediaDel, $getMedia);
            unset($getMedia[$keyDel]);
            unlink($this->getParameter('upload_directory').'/'.$currentMediaDel);
        }
        
        $resp = new JsonResponse();
        $resp->setData($data);
        // dd($getMedia[$key]);
        // $getMediaAfter = $trick->getMedia();
        $trickTest->setMedia($getMedia);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($trickTest);
        $entityManager->flush();
        
        // $this->edit($request,$trick);
        return $resp;
    }

    /**
     * @Route("/{id}/edit", name="tricks_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tricks $trick): Response
    {
        // global $resp;
        // $resp = new TricksController();
        // $resp->ajaxSupprMedia($request);
        $testMediaSubmit = $request->request->get('media');
        $form = $this->createForm(TricksType::class, $trick);
        $form->handleRequest($request);
        $getMedia = $trick->getMedia();
        $getMainImage = $trick->getMainImage();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $medias = $form->get('media')->getData();
            if ($medias) {
                $file = $getMedia;
                foreach ($medias as $media) {               
                    $newFilename = uniqid().'.'.$media->guessExtension();
                    try {
                        $media->move(
                            $this->getParameter('upload_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                    }
                    
                    $mime_type = mime_content_type('upload/'.$newFilename);
                    $testType = strtok($mime_type, '/');
                    $addTypeName = $testType . $newFilename;
                    rename ("upload/" . $newFilename, "upload/" . $addTypeName );
                    array_push($file, $addTypeName);
                    $trick->setMedia($file);
                }
            }
            $mainImageGet = $form->get('mainImage')->getData();
            // dd($mainImageGet);
            if ($mainImageGet != null) {
                // dd($mainImageGet);
                $fileMainImage = [];
                // dd($mainImageGet);              
                $newFilenameMain = uniqid().'.'.$mainImageGet->guessExtension();
                try {
                    $mainImageGet->move(
                        $this->getParameter('upload_directory'), $newFilenameMain
                    );
                } catch (FileException $e) {
                }
                $mime_typeMain = mime_content_type('upload/'.$newFilenameMain);
                $testTypeMain = strtok($mime_typeMain, '/');
                $addTypeNameMain = $testTypeMain . $newFilenameMain;
                rename ("upload/" . $newFilenameMain, "upload/" . $addTypeNameMain );
                array_push($fileMainImage, $addTypeNameMain);
                $trick->setMainImage($fileMainImage);
            }
            $embed = $form->get('embedsingle')->getData();
            if ($embed != null){
                $str = $embed;
                $substring = string_between_two_string($str, '<iframe', '</iframe>');
                $trick->setEmbedsingle("<iframe".$substring."</iframe>");
            }

            $timeNow = new \DateTime('now');
            $timeNow->add(new DateInterval('PT1H'));
            $trick->setUpdateDate($timeNow);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trick);
            $entityManager->flush();
            $this->addFlash('success', 'Le trick à été modifié/ajouté avec succès!');
            return $this->redirectToRoute('main', [], Response::HTTP_SEE_OTHER);
        }

        // $mainImage = $form->get('mainImage')->getData();
        // $binary = stream_get_contents($mainImage);
        // $mainImageEncode = base64_encode($binary);
        // dd($mainImage);

        return $this->renderForm('tricks/edit.html.twig', [
            'trick' => $trick,
            'form' => $form,
            // 'mainImageEncode' => $mainImageEncode
        ]);

        // return $this->render('tricks/edit.html.twig', [
            
        // ]);
    }


    /**
     * @Route("/{id}", name="tricks_delete", methods={"POST"})
     */
    public function delete(Request $request, Tricks $trick): Response
    {   
        // dd('testdelete');
        if ($this->isCsrfTokenValid('delete'.$trick->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trick);
            $entityManager->flush();
        }

        return $this->redirectToRoute('main', [], Response::HTTP_SEE_OTHER);
    }
}
