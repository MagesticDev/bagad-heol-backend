<?php

namespace App\Controller\Forum;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    /**
     * @Route("/forum/edit", name="forum_edit")
     */
    public function index(): Response
    {
        return $this->render('forum/edit/index.html.twig', [
            'controller_name' => 'EditController',
        ]);
    }
}
