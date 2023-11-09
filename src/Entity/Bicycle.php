<?php


namespace App\Entity;

class Bicycle
{
    /* Use this to keep unique ID for Object */
    private static int $idCounter = 0;

    protected string $id;
    protected ?string $brand;
    protected ?Wheel $wheel;
    protected ?BikeChain $bikeChain;
    
    public function __construct(string $brand = null, Wheel $wheel = null, BikeChain $bikeChain = null) {
        $this->id = ++self::$idCounter;
        $this->brand = $brand;
        $this->wheel = $wheel;
        $this->bikeChain = $bikeChain;
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

    public function getWheel(): Wheel {
        return $this->wheel;
    }

    public function setWheel(Wheel $wheel): void {
        $this->wheel = $wheel;
    }

    public function getBikeChain(): BikeChain {
        return $this->bikeChain;
    }

    public function setBikeChain(BikeChain $bikeChain): void {
        $this->bikeChain = $bikeChain;
    }

    public function canBeRidden(): bool {
        /**
         * If the bike has all the necessary components, and the bike chain is oiled the bike can be ridden
         */
        if(isset($this->bikeChain) && isset($this->wheel) && $this->bikeChain->isOiled()) {
            return true;
        }
        return false;
    }
}