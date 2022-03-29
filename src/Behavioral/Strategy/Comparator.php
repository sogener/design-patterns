<?php

namespace App\Behavioral\Strategy;

interface Comparator
{
    public function compare(array $a, array $b): int;
}