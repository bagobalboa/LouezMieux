<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/utilisateur")
 * 
 * @IsGranted("ROLE_USER")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/utilisateur/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        if ($this->isGranted('ROLE_LOCATAIRE')) {
            return $this->render('user/afficher-locataire.html.twig', [
                'user' => $user,
            ]);
        } else if ($this->isGranted('ROLE_PROPRIETAIRE')) {
            return $this->render('user/afficher-proprietaire.html.twig', [
                'user' => $user,
            ]);
        }
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        if ($this->isGranted('ROLE_LOCATAIRE')) {
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('user_show');
            }

            return $this->render('user/edit.html.twig', [
                'user' => $user,
                'form' => $form->createView(),
            ]);
        } else if ($this->isGranted('ROLE_PROPRIETAIRE')) {
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('user_show');
            }

            return $this->render('user/edit.html.twig', [
                'user' => $user,
                'form' => $form->createView(),
            ]);
        }
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}
