<?php

namespace App\Behavioral\Iterator;

class Book
{
    public function __construct(private string $title, private string $author) {}

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitleAndAuthor(): string
    {
        return $this->title . ' by ' . $this->author;
    }
}