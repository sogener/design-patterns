<?php

namespace App\Creational\AbstractFactory;

class ModernChair implements Chair
{
    private bool $canSit;
    private int $legsAmount;

    public function sitOn(bool $can): self
    {
        $this->canSit = $can;

        return $this;
    }

    public function hasLegs(int $amount): self
    {
        $this->legsAmount = $amount;

        return $this;
    }
}