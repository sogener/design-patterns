<?php

interface FurnitureFactory
{
    public function createWindow(): Window;

    public function createChair(): Chair;

    public function createSofa();
}