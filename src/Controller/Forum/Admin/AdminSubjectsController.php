<?php

namespace App\Controller\Forum\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSubjectsController extends AbstractController
{
    /**
     * @Route("/forum/admin/admin/subjects", name="forum_admin_admin_subjects")
     */
    public function index(): Response
    {
        return $this->render('forum/admin/admin_subjects/index.html.twig', [
            'controller_name' => 'AdminSubjectsController',
        ]);
    }
}
