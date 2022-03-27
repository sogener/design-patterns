<?php

namespace App\Behavioral\Command\Tests;

use App\Behavioral\Iterator\Book;
use App\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList(): void
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('PHP', 'Rasmus Lerdorf'));
        $bookList->addBook(new Book('Clean code', 'Robert C. Martin'));
        $bookList->addBook(new Book('Go for PHP developers', 'Gleb Kalinin'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }

        $this->assertSame(
            [
                'PHP by Rasmus Lerdorf',
                'Clean code by Robert C. Martin',
                'Go for PHP developers by Gleb Kalinin'
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemovingBook(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $book2 = new Book('Professional Php Design Patterns', 'Aaron Saray');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book->getTitleAndAuthor();
        }

        $this->assertSame(
            ['Professional Php Design Patterns by Aaron Saray'],
            $books
        );
    }

    public function testCanAddBookToList(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList(): void
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }
}