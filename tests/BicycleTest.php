<?php

namespace App\Tests\Entity;

use App\Entity\Bicycle;
use App\Entity\BikeChain;
use App\Entity\Wheel;

use PHPUnit\Framework\TestCase;

class BicycleTest extends TestCase
{
    public function testCreate(): void {
        $bicycle = new Bicycle();
        $this->assertIsObject($bicycle);
    }

    /**
     * @dataProvider provideData
     */
    public function testItCanBeRidden($a, $b, $c): void {
        $bicycle = new Bicycle("TestBrand", $a, $b);
        $this->assertEquals($bicycle->canBeRidden(), $c);
    }

    public function provideData() {
        return [
            [null, new BikeChain("Trek", true), false],
            [null, null, false],
            [new Wheel(), new BikeChain("Giant"), false],
            [new Wheel(), new BikeChain("Giant"), false],
            [new Wheel(), new BikeChain("Trek", true), true]
        ];
    }
}