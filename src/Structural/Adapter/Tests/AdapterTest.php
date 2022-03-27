<?php

namespace App\Structural\Registry\Tests;

use App\Structural\Adapter\EBookAdapter;
use App\Structural\Adapter\TheWitcherEBook;
use App\Structural\Adapter\TheWitcherPaperBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnPaperBook(): void
    {
        $book = new TheWitcherPaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnEBook(): void
    {
        $eBook = new TheWitcherEBook();

        $book = new EBookAdapter($eBook);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}