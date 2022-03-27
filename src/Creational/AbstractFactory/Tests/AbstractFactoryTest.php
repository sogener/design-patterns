<?php

namespace App\Creational\AbstractFactory\Tests;

use App\Creational\AbstractFactory\Chair;
use App\Creational\AbstractFactory\FurnitureFactory;
use App\Creational\AbstractFactory\GothicFurnitureFactory;
use App\Creational\AbstractFactory\ModernFurnitureFactory;
use App\Creational\AbstractFactory\Sofa;
use App\Creational\AbstractFactory\Window;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory(): array
    {
        return [
            [new GothicFurnitureFactory()],
            [new ModernFurnitureFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateGothicFurnitureFactory(FurnitureFactory $furnitureFactory): void
    {
        $this->assertInstanceOf(Sofa::class, $furnitureFactory->createSofa());
        $this->assertInstanceOf(Chair::class, $furnitureFactory->createChair());
        $this->assertInstanceOf(Window::class, $furnitureFactory->createWindow());

    }
}