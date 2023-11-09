<?php

namespace App\Tests\Entity;

use App\Entity\Wheel;
use PHPUnit\Framework\TestCase;

class WheelTest extends TestCase
{
    public function testItCanCreate(): void
    {
        $entity = new Wheel();
        $this->assertIsObject($entity);
    }

}