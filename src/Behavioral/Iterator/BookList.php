<?php

namespace App\Behavioral\Iterator;

class BookList implements \Countable, \Iterator
{
    private array $books = [];
    private int $currentIndex = 0;

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            /** @var Book $book */
            if ($book->getTitleAndAuthor() === $bookToRemove->getTitleAndAuthor()) {
                unset($this->books[$key]);
            }

            $this->books = array_values($this->books);
        }
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next(): void
    {
        $this->currentIndex++;
    }

    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}