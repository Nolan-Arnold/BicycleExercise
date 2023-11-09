<?php

namespace App\Entity;

class Motorcycle extends Bicycle {

    const TANK_CAPACITY = 20;
    private int $gasInTank = 0;
 
    public function __construct(string $brand = null, Wheel $wheel = null, BikeChain $bikeChain = null, int $gasInTank = 0) {
        parent::__construct($brand, $wheel, $bikeChain);
        $this->addGas($gasInTank);
    }

    public function getGasAmount(): int {
        return $this->gasInTank();
    }

    public function canBeRidden(): bool {
        /**
         * If the motorcycle has all the necessary components, the bike chain is oiled, and the motorcycle has gas in the tank, then the motorcycle can be ridden
         */
        if(isset($this->bikeChain) && isset($this->wheel) && $this->bikeChain->isOiled() && $this->gasInTank > 0) {
            return true;
        }
        return false;
    }

    public function addGas(int $gas): void {
        try {
            $this->compareGasAmounts($gas);
            $this->gasInTank += $gas;
        }
        catch (Exception $e) {
            throw $e;
        }
    }

    private function compareGasAmounts(int $gas) {
        if($gas < 0 || $this->gasInTank + $gas > self::TANK_CAPACITY){
            throw new Exception("Could not add gas to tank");
        }
    }
}