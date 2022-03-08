<?php

namespace App\Creational\AbstractFactory;

interface Transport
{
    public function setDeliverPrice($price);

    public function getDeliverPrice();

    public function deliver();
}