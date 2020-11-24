<?php

namespace App\Controller\Forum;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SectionsController extends AbstractController
{
    /**
     * @Route("/forum/sections", name="forum_sections")
     */
    public function index(): Response
    {
        return $this->render('forum/sections/index.html.twig', [
            'controller_name' => 'SectionsController',
        ]);
    }
}
