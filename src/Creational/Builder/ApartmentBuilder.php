<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Apartament;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\House;
use App\Creational\Builder\Parts\Wall;
use App\Creational\Builder\Parts\Window;

class ApartmentBuilder implements Builder
{
    private Apartament $apartment;

    public function addWalls(): self
    {
        $this->apartment->setPart('right wall', new Wall());
        $this->apartment->setPart('left wall', new Wall());
        $this->apartment->setPart('wall in the middle', new Wall());

        return $this;
    }

    public function addDoor(): self
    {
        $this->apartment->setPart('firstDoor', new Door());
        $this->apartment->setPart('secondDoor', new Door());

        return $this;
    }

    public function addWindows(): self
    {
        $this->apartment->setPart('window1', new Window());
        $this->apartment->setPart('window2', new Window());

        return $this;
    }

    public function build(): House
    {
        return $this->apartment;
    }

    public function createHouse(): self
    {
        $this->apartment = new Apartament();

        return $this;
    }
}