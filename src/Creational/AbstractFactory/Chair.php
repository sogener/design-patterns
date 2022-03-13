<?php

namespace App\Creational\AbstractFactory;

interface Chair
{
    public function sitOn(bool $can);

    public function hasLegs(int $amount);
}