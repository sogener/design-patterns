<?php

namespace App\Creational\AbstractFactory;

interface FurnitureFactory
{
    public function createWindow(): Window;

    public function createChair(): Chair;

    public function createSofa(): Sofa;
}