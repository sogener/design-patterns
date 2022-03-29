<?php

namespace App\Behavioral\Strategy;

use DateTime;

class DateComparator implements Comparator
{
    public function compare(array $a, array $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }

}