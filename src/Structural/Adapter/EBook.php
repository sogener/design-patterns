<?php

namespace App\Structural\Adapter;

interface EBook
{
    public function pressNext(): void;

    public function getPage(): array;

    public function unlock(): void;
}