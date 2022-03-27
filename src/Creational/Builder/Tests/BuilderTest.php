<?php

namespace App\Creational\Builder\Tests;

use App\Creational\Builder\ApartmentBuilder;
use App\Creational\Builder\HotelBuilder;
use App\Creational\Builder\Parts\Apartament;
use App\Creational\Builder\Parts\Hotel;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function provideApartment(): array
    {
        return [
            [new ApartmentBuilder()]
        ];
    }

    public function provideHotelBuilder(): array
    {
        return [
            [new HotelBuilder()]
        ];
    }

    /**
     * @dataProvider provideApartment
     * @param ApartmentBuilder $apartmentBuilder
     * @return void
     */
    public function testApartmentBuilder(ApartmentBuilder $apartmentBuilder): void
    {
        $apartment = $apartmentBuilder
            ->createHouse()
            ->addWalls()
            ->addWindows()
            ->addDoor()
            ->build();

        $this->assertInstanceOf(Apartament::class, $apartment);
    }

    /**
     * @dataProvider provideHotelBuilder
     * @param HotelBuilder $hotelBuilder
     * @return void
     */
    public function testHotelBuilder(HotelBuilder $hotelBuilder): void
    {
        $hotel = $hotelBuilder
            ->createHouse()
            ->addDoor()
            ->addWindows()
            ->addWalls()
            ->addCarpet()
            ->build();

        $this->assertInstanceOf(Hotel::class, $hotel);
    }
}