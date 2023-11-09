<?php


namespace App\Entity;

class Engine
{
    /* Use this to keep unique ID for Object */
    private static int $idCounter = 0;
    private string $id;
    private ?string $brand;

    public function __construct(string $brand = null) {
        $this->id = ++self::$idCounter;
        $this->brand = $brand;
    }

    public function getId(): string {
        return $this->id;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function setBrand(string $brand): void {
        $this->brand = $brand;
    }
}