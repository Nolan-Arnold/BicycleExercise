<?php

namespace App\Tests\Entity;

use App\Entity\Motorcycle;
use App\Entity\Bicycle;
use App\Entity\BikeChain;
use App\Entity\Wheel;

use PHPUnit\Framework\TestCase;

class MotorcycleTest extends TestCase
{
    public function testCreate(): void {
        $motorcycle = new Motorcycle();
        $this->assertIsObject($motorcycle);
    }

    /**
     * @dataProvider provideData
     */
    public function testItCanBeRidden($a, $b, $c, $d): void {
        $motorcycle = new Motorcycle("TestBrand", $a, $b, $c);
        $this->assertEquals($motorcycle->canBeRidden(), $d);
    }

    public function testItIsAChildOfBicycle() {
        $motorcycle = new Motorcycle();
        $this->assertInstanceOf(Bicycle::class, $motorcycle);
    }

    public function provideData() {
        return [
            [null, new BikeChain("Trek", true), 0, false],
            [null, null, 0, false],
            [new Wheel(), new BikeChain("Giant"), 0, false],
            [new Wheel(), new BikeChain("Giant"), 0, false],
            [new Wheel(), new BikeChain("Trek", true), 10, true]
        ];
    }
}