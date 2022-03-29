<?php

namespace App\Behavioral\Strategy;

class IdComparator implements Comparator
{
    public function compare(array $a, array $b): int
    {
        return $a['id'] <=> $b['id'];
    }


}