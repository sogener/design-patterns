<?php

namespace App\More\MVC;

class Posts
{
    private array $posts = [];

    /**
     * @return array
     */
    public function findAll(): array
    {
        return $this->posts;
    }

    /**
     * @param array $posts
     */
    public function setPosts(array $posts): void
    {
        $this->posts = $posts;
    }

    public function findCertainAmount(int $count): array
    {
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            $data[] = $this->posts[$i];
        }

        return $data;
    }

}