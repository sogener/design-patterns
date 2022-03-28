<?php

namespace App\Structural\Facade;

interface Shop
{
    public function deliverNewProducts(DeliverCompany $deliverCompany): array;
}