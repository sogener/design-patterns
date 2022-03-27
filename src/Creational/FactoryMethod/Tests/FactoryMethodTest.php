<?php

namespace App\Creational\Builder\Tests;

use App\Creational\FactoryMethod\AirLogistic;
use App\Creational\FactoryMethod\Airplane;
use App\Creational\FactoryMethod\Car;
use App\Creational\FactoryMethod\RoadLogistic;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function provideRoadLogistic(): array
    {
        return [
            [new RoadLogistic()]
        ];
    }

    public function provideAirLogistic(): array
    {
        return [
            [new AirLogistic()]
        ];
    }

    /**
     * @dataProvider provideRoadLogistic
     * @param RoadLogistic $roadLogistic
     * @return void
     */
    public function testRoadLogistic(RoadLogistic $roadLogistic): void
    {
        $car = $roadLogistic->createTransport();

        $car->setDeliverPrice(1000);

//        deliver price must be integer
        $this->assertIsInt($car->getDeliverPrice());

//        deliver if is all ok
        $car->deliver();

        $this->assertInstanceOf(Car::class, $car);
    }

    /**
     * @dataProvider provideAirLogistic
     * @param AirLogistic $airLogistic
     * @return void
     */
    public function testAirLogistic(AirLogistic $airLogistic): void
    {
        $airplane = $airLogistic->createTransport();

        $airplane->setDeliverPrice(1000);

//        deliver price must be integer
        $this->assertIsInt($airplane->getDeliverPrice());

//        deliver if is all ok
        $airplane->deliver();

        $this->assertInstanceOf(Airplane::class, $airplane);
    }
}