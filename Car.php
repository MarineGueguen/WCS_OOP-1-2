<?php

class Car {

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start(): string
    {
        $this->currentSpeed = 50;
        return 'Go! <br>';
    }

    public function forward(): string
    {
        $sentence = "";
        while ($this->currentSpeed < 130){
            $this->currentSpeed++;
            $sentence .= "Faster!!! ";
        }
        $sentence .= "<br>I can't go faster! <br>";
        return $sentence;
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= "Brake!!! ";
        }
        $sentence .= "<br>I'm stopped! <br>";
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}


?>