<?php

namespace App\Creational\FactoryMethod;

/*
 * Создатель
 */

interface Logistic
{
    public function createTransport(): Transport;
}