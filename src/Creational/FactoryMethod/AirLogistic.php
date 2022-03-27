<?php

namespace App\Creational\FactoryMethod;

/*
 * Конкретный создатель
 * */

class AirLogistic implements Logistic
{

    public function createTransport(): Transport
    {
        return new Airplane();
    }
}