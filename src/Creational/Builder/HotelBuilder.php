<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Carpet;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\Hotel;
use App\Creational\Builder\Parts\House;
use App\Creational\Builder\Parts\Wall;
use App\Creational\Builder\Parts\Window;

class HotelBuilder implements Builder
{
    private Hotel $hotel;

    public function addWalls(): self
    {
        $this->hotel->setPart('black wall', new Wall());
        $this->hotel->setPart('green wall', new Wall());

        return $this;
    }

    public function addDoor(): self
    {
        $this->hotel->setPart('Metallic door', new Door());

        return $this;
    }

    public function addWindows(): self
    {
        $this->hotel->setPart('golden window', new Window());
        $this->hotel->setPart('rosary window', new Window());

        return $this;
    }

    public function build(): House
    {
        return $this->hotel;
    }

    public function createHouse(): self
    {
        $this->hotel = new Hotel();

        return $this;
    }

    public function addCarpet(): self
    {
        $this->hotel->setPart('russian carpet', new Carpet());

        return $this;
    }
}