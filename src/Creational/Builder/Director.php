<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\House;

class Director
{
    public function build(Builder $builder): House
    {
        $builder->createHouse();
        $builder->addDoor();
        $builder->addWindows();
        $builder->addWalls();

        return $builder->getHouse();
    }
}