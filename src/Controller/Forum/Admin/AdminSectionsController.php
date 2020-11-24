<?php

namespace App\Controller\Forum\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSectionsController extends AbstractController
{
    /**
     * @Route("/forum/admin/admin/sections", name="forum_admin_admin_sections")
     */
    public function index(): Response
    {
        return $this->render('forum/admin/admin_sections/index.html.twig', [
            'controller_name' => 'AdminSectionsController',
        ]);
    }
}
