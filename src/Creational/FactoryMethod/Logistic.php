<?php

namespace App\Creational\AbstractFactory;

/*
 * Создатель
 */

interface Logistic
{
    public function createTransport(): Transport;
}