<?php

use App\Creational\Prototype\CommonPokemon;
use App\Creational\Prototype\RarePokemon;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanCreateObjects(): void
    {
        $rarePokemonPrototype = new RarePokemon();
        $commonPokemonPrototype = new CommonPokemon();

        for ($i = 0; $i < 10; $i++) {
            $pokemon = clone $rarePokemonPrototype;
            $pokemon->setAge($i);

            $this->assertInstanceOf(RarePokemon::class, $pokemon);
        }

        for ($i = 0; $i < 5; $i++) {
            $pokemon = clone $commonPokemonPrototype;
            $pokemon->setAge($i);

            $this->assertInstanceOf(RarePokemon::class, $pokemon);
        }
    }
}