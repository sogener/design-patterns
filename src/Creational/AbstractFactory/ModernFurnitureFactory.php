<?php

namespace App\Creational\AbstractFactory;

class ModernFurnitureFactory implements FurnitureFactory
{

    public function createWindow(): ModernWindow
    {
        return new ModernWindow();
    }

    public function createChair(): ModernChair
    {
        return new ModernChair();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}