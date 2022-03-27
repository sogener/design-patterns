<?php

namespace App\Structural\Adapter;

interface Book
{
    public function getPage();

    public function turnPage(): void;

    public function open(): void;
}