<?php

namespace App\Creational\AbstractFactory;

class GothicFurnitureFactory implements FurnitureFactory
{

    public function createWindow(): GothicWindow
    {
        return new GothicWindow();
    }

    public function createChair(): GothicChair
    {
        return new GothicChair();
    }

    public function createSofa(): Sofa
    {
        return new GothicSofa();
    }
}