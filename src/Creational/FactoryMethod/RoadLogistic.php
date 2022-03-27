<?php

namespace App\Creational\FactoryMethod;

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