<?php

namespace App\Structural\Decorator;

class BookingDecorator implements Booking
{
    public function __construct(protected Booking $booking) {}

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice();
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription();
    }
}