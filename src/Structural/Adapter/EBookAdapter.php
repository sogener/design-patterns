<?php

namespace App\Structural\Adapter;

/**
 * Это адаптер. Обрати внимание что он наследует Book
 * Таким образом тебе не нужно менять код в клиенте, который использует класс Book.
 */
class EBookAdapter implements Book
{

    /**
     * @param EBook $eBook
     */
    public function __construct(private EBook $eBook) {}

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

    /**
     * @return void
     */
    public function turnPage(): void
    {
        $this->eBook->pressNext();
    }

    /**
     * @return void
     */
    public function open(): void
    {
        $this->eBook->unlock();
    }
}