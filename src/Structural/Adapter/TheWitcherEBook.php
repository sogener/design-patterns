<?php

namespace App\Structural\Adapter;

/**
 * Это класс используемый адаптером
 * В продакшн коде - это может быть класс из библиотеки/бандла/vendor.
 */
class TheWitcherEBook implements EBook
{
    /**
     * @var int
     */
    private int $page = 1;
    /**
     * @var int
     */
    private int $totalPages = 100;


    /**
     * @return void
     */
    public function pressNext(): void
    {
        $this->page++;
    }

    /**
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

    /**
     * @return void
     */
    public function unlock(): void
    {
        $this->page = 1;
    }
}