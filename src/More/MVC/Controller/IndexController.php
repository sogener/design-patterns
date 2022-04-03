<?php

namespace App\More\MVC;

class IndexController
{
    public function index(): array
    {
        $posts = (new Posts())->findAll();

        return $this->render('index.twig', [
            'posts' => $posts
        ]);
    }

    public function detail(): array
    {
        $posts = (new Posts())->findCertainAmount(10);

        return $this->render('index.twig', [
            'posts' => $posts
        ]);
    }
}