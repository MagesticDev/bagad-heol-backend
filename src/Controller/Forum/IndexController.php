<?php

namespace App\Controller\Forum;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\ForumCategories;
use App\Entity\Forum;

class IndexController extends AbstractController
{
    /**
     * @Route("/forum/index", name="forum_index")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        // $cat = new ForumCategories();
        // $cat->setName('Derniers messages Magestic');
        // $cat->setDescription('blabla');
        // $cat->setPosition(1);
        // $cat->setHasAdmin(0);



        // $entityManager->persist($cat);
        // $entityManager->flush();

        $forum = new Forum();
        $forum->setTitle('Echanges');
        $forum->setDescription('test');
        $forum->setPosition(1);

        $category = $this->getDoctrine()->getRepository(ForumCategories::class)->find(1);

        $forum->setCategoryId($category->getId());


        $entityManager->persist($forum);
        $entityManager->flush();
        return $this->render('forum/index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
