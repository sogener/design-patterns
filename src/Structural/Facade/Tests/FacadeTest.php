<?php

namespace App\Structural\Registry\Tests;

use App\Structural\Facade\DeliverCompany;
use App\Structural\Facade\Facade;
use App\Structural\Facade\Shop;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testGetProducts(): void
    {
        $shop = $this->createMock(Shop::class);
        $deliverCompany = $this->createMock(DeliverCompany::class);

        $facade = new Facade($shop, $deliverCompany);

        $products = $facade->getProducts();

        $this->assertIsArray($products);
    }
}