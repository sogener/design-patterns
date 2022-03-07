<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Parts\House;

interface Builder
{
    public function addWalls();

    public function addDoor();

    public function addWindows();

    public function getHouse(): House;

    public function createHouse();
}