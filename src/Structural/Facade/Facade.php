<?php

namespace App\Structural\Facade;

class Facade
{
    public function __construct(private Shop $shop, private DeliverCompany $deliverCompany) {}

    public function getProducts(): array
    {
        return $this->shop->deliverNewProducts($this->deliverCompany);
    }
}