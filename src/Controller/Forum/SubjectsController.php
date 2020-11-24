<?php

namespace App\Controller\Forum;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubjectsController extends AbstractController
{
    /**
     * @Route("/forum/subjects", name="forum_subjects")
     */
    public function index(): Response
    {
        return $this->render('forum/subjects/index.html.twig', [
            'controller_name' => 'SubjectsController',
        ]);
    }
}
