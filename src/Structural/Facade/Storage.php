<?php

namespace App\Structural\Facade;

interface Storage
{
    public function getProductsFromStorage(Products $products): array;
}