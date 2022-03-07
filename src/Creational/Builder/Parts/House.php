<?php

namespace App\Creational\Builder\Parts;

abstract class House
{
    public function setPart(string $key, object $value): void {}
}