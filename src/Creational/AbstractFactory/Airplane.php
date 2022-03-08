<?php

namespace App\Creational\AbstractFactory;

class Airplane implements Transport
{
    private int $price;

    public function setDeliverPrice($price): void
    {
        $this->price = $price;
    }

    public function deliver(): string
    {
        return 'start deliver';
    }

    public function getDeliverPrice(): int
    {
        return $this->price;
    }
}