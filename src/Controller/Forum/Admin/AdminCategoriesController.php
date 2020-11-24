<?php

namespace App\Controller\Forum\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminCategoriesController extends AbstractController
{
    /**
     * @Route("/forum/admin/admin/categories", name="forum_admin_admin_categories")
     */
    public function index(): Response
    {
        return $this->render('forum/admin/admin_categories/index.html.twig', [
            'controller_name' => 'AdminCategoriesController',
        ]);
    }
}
