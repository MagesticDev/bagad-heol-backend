<?php

namespace App\Controller\Forum;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewController extends AbstractController
{
    /**
     * @Route("/forum/new", name="forum_new")
     */
    public function index(): Response
    {
        return $this->render('forum/new/index.html.twig', [
            'controller_name' => 'NewController',
        ]);
    }
}
