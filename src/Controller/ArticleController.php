<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article_list")
     */
    public function index()
    {
        // Récupération du Repository
        $repository = $this->getDoctrine()->getRepository(Article::class);

        // Récupération des articles
        $articles = $repository->findAll();



        return $this->render('article/index.html.twig', [
            'articles' => $articles
        ]);
    }
    /**
     * @Route("/article/creation", name="article_create")
     * @return Response
     */
    public function create(): Response
    {
        // Récupération du formulaire
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        // Envoi du formulaire à la vue
        return $this->render('article/create.html.twig', [
            'createForm' => $form->createView()
        ]);
    }

    /** @Route ("/article/{id}", name="article_show") */
    public function show($id)
    {
        $repository = $this->getDoctrine()->getRepository(Article::class);
        $article= $repository->findOneBy ([
            'id'=> $id
        ]);



        return $this->render('article/show.html.twig', [
            'article' => $article
        ]);
    }
}


