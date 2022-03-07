<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Apartament;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\House;
use App\Creational\Builder\Parts\Wall;
use App\Creational\Builder\Parts\Window;

class ApartamentBuilder implements Builder
{
    private Apartament $apartament;

    public function addWalls(): void
    {
        $this->apartament->setPart('right wall', new Wall());
        $this->apartament->setPart('left wall', new Wall());
        $this->apartament->setPart('wall in the middle', new Wall());
    }

    public function addDoor(): void
    {
        $this->apartament->setPart('firstDoor', new Door());
        $this->apartament->setPart('secondDoor', new Door());
    }

    public function addWindows(): void
    {
        $this->apartament->setPart('window1', new Window());
        $this->apartament->setPart('window2', new Window());
    }

    public function getHouse(): House
    {
        return $this->apartament;
    }

    public function createHouse(): void
    {
        $this->apartament = new Apartament();
    }
}