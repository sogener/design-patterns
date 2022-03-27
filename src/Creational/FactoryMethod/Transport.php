<?php

namespace App\Creational\FactoryMethod;

interface Transport
{
    public function setDeliverPrice(int $price): void;

    public function getDeliverPrice(): int;

    public function deliver();
}