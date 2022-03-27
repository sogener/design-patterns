<?php

namespace App\Structural\Adapter;

class TheWitcherPaperBook implements Book
{
    private int $page;

    public function getPage(): int
    {
        return $this->page;
    }

    public function turnPage(): void
    {
        $this->page++;
    }

    public function open(): void
    {
        $this->page = 1;
    }
}