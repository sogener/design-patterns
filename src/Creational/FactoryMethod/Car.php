<?php

namespace App\Creational\FactoryMethod;

class Car implements Transport
{
    private int $price;

    public function deliver(): string
    {
        return 'start deliver';
    }

    public function setDeliverPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getDeliverPrice(): int
    {
        return $this->price;
    }
}