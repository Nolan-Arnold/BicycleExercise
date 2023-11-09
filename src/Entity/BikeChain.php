<?php


namespace App\Entity;

class BikeChain
{
    /* Use this to keep unique ID for Object */
    private static int $idCounter = 0;
    private string $id;
    private ?string $brand;
    private bool $isOiled;

    public function __construct(string $brand = null, bool $isOiled = false) {
        $this->id = ++self::$idCounter;
        $this->brand = $brand;
        $this->isOiled = $isOiled;
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

    public function isOiled(): bool {
        return $this->isOiled;
    } 

    public function oilBikeChain(): void {
        $this->isOiled = true;
    }
}