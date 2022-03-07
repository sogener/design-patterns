<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\Carpet;
use App\Creational\Builder\Parts\Hotel;
use App\Creational\Builder\Parts\Door;
use App\Creational\Builder\Parts\House;
use App\Creational\Builder\Parts\Wall;
use App\Creational\Builder\Parts\Window;

class HotelBuilder implements Builder
{
    private Hotel $hotel;

    public function addWalls(): void
    {
        $this->hotel->setPart('black wall', new Wall());
        $this->hotel->setPart('green wall', new Wall());
    }

    public function addDoor(): void
    {
        $this->hotel->setPart('Metallic door', new Door());
    }

    public function addWindows(): void
    {
        $this->hotel->setPart('golden window', new Window());
        $this->hotel->setPart('rosary window', new Window());
    }

    public function getHouse(): House
    {
        return $this->hotel;
    }

    public function createHouse(): void
    {
        $this->hotel = new Hotel();
    }

    public function addCarpet(): void
    {
        $this->hotel->setPart('russian carpet', new Carpet());
    }
}