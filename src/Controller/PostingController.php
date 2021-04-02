<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostingController extends AbstractController
{
    /**
     * @Route("/posting", name="posting")
     */
    public function index(): Response
    {
        return $this->render('posting/index.html.twig', [
            'controller_name' => 'PostingController',
        ]);
    }
}
