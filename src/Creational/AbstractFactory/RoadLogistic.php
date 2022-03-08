<?php

namespace App\Creational\AbstractFactory;

/*
 * Конкретный создатель
 * */

class RoadLogistic implements Logistic
{

    public function createTransport(): Transport
    {
        return new Car();
    }
}