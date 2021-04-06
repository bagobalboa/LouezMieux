<?php

namespace App\Controller;

use App\Entity\Posting;
use App\Form\PostingType;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class PostingController extends AbstractController
{
    /**
     * @Route("/posting/{id}", name="posting")
     */
    public function showPosting($id): Response
    {
        $repository = $this->getDoctrine()->getRepository(Posting::class);
        $posting = $repository->find($id);

        if (empty($posting)) throw new NotFoundHttpException();

        return $this->render('posting/index.html.twig', [
            'posting' => $posting->createView()
        ]);
    }

    /**
     * @Route("/creer-annonce", name="creer_annonce")
     */
    public function createPosting(Request $r): Response
    {
        $posting = new Posting();

        $form = $this->createForm(PostingType::class, $posting);

        $form->handleRequest($r);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return $this->render('annonce/creer-annonce.html.twig', [
                'form' => $form->createView(),
            ]);
        } else {

            $photo1 = $form->get('photo1')->getData();
            $photo2 = $form->get('photo2')->getData();
            $photo3 = $form->get('photo3')->getData();
            $photo4 = $form->get('photo4')->getData();
            $photo5 = $form->get('photo5')->getData();

            $fileName1 = uniqid() . '.' . $photo1->guessExtension();
            $fileName2 = uniqid() . '.' . $photo2->guessExtension();
            $fileName3 = uniqid() . '.' . $photo3->guessExtension();
            $fileName4 = uniqid() . '.' . $photo4->guessExtension();
            $fileName5 = uniqid() . '.' . $photo5->guessExtension();

            try {
                $photo1->move($this->getParameter('posting_image_directory'), $fileName1);
                $photo2->move($this->getParameter('posting_image_directory'), $fileName2);
                $photo3->move($this->getParameter('posting_image_directory'), $fileName3);
                $photo4->move($this->getParameter('posting_image_directory'), $fileName4);
                $photo5->move($this->getParameter('posting_image_directory'), $fileName5);
            } catch (FileException $ex) {
                $form->addError(new FormError('Une erreur est survenue pendant l\'upload du fichier : ' . $ex->getMessage()));
                throw new Exception('File upload error');
            }

            $posting->setphoto1($fileName1);
            $posting->setphoto2($fileName2);
            $posting->setphoto3($fileName3);
            $posting->setphoto4($fileName4);
            $posting->setphoto5($fileName5);

            $em = $this->getDoctrine()->getManager();
            $em->persist($posting);
            $em->flush();

            return $this->redirect('/posting/' . $posting->getId());
        }
    }

    /**
     * @Route("/supprimer-une-annonce/{id}), name="supprimer_annonce")
     */
    public function deletePosting($id): Response
    {

        $repo = $this->getDoctrine()->getRepository(Posting::class);
        $posting = $repo->find($id);

        if (empty($posting)) throw new NotFoundHttpException();

        $em = $this->getDoctrine()->getManager();
        $em->remove($posting);
        $em->flush();

        return $this->redirectToRoute('gerer_annonces');
    }

    /**
     * @Route("/modifier-une-annonce/{id}", name="modifier_annonce")
     */
    public function updatePosting($id, Request $r): Response
    {

        $repo = $this->getDoctrine()->getRepository(Posting::class);
        $posting = $repo->find($id);

        $oldPhoto1 = $posting->getphoto1();
        $oldPhoto2 = $posting->getphoto2();
        $oldPhoto3 = $posting->getphoto3();
        $oldPhoto4 = $posting->getphoto4();
        $oldPhoto5 = $posting->getphoto5();

        if (empty($posting)) throw new NotFoundHttpException();

        $form = $this->createForm(PostingType::class, $posting);

        $form->handleRequest($r);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return $this->render('posting/modifier-annonce
            html.twig', [
                'form' => $form->createView(),
                'oldPhoto1' => $oldPhoto1,
                'oldPhoto2' => $oldPhoto2,
                'oldPhoto3' => $oldPhoto3,
                'oldPhoto4' => $oldPhoto4,
                'oldPhoto5' => $oldPhoto5,
                'id' => $posting->getId()
            ]);
        } else {

            $photo1 = $form->get('photo1')->getData();
            $photo2 = $form->get('photo2')->getData();
            $photo3 = $form->get('photo3')->getData();
            $photo4 = $form->get('photo4')->getData();
            $photo5 = $form->get('photo5')->getData();

            try {
                $photo1->move($this->getParameter('posting_image_directory'), $oldPhoto1);
                $photo2->move($this->getParameter('posting_image_directory'), $oldPhoto2);
                $photo3->move($this->getParameter('posting_image_directory'), $oldPhoto3);
                $photo4->move($this->getParameter('posting_image_directory'), $oldPhoto4);
                $photo5->move($this->getParameter('posting_image_directory'), $oldPhoto5);
            } catch (FileException $ex) {
                $form->addError(new FormError('Une erreur est survenue pendant l\'upload du fichier : ' . $ex->getMessage()));
                throw new Exception('File upload error');
            }

            $posting->setphoto1($oldPhoto1);
            $posting->setphoto2($oldPhoto2);
            $posting->setphoto3($oldPhoto3);
            $posting->setphoto4($oldPhoto4);
            $posting->setphoto5($oldPhoto5);

            $em = $this->getDoctrine()->getManager();
            $em->persist($posting);
            $em->flush();

            return $this->redirect('/posting/' . $posting->getId());
        }
    }
}
