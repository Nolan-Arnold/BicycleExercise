<?php

namespace App\Tests\Entity;

use App\Entity\BikeChain;
use PHPUnit\Framework\TestCase;

class BikeChainTest extends TestCase
{
    public function testItCanCreate(): void
    {
        $entity = new BikeChain();
        $this->assertIsObject($entity);
    }

}