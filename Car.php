<?php

class Car {
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color = "Black";
    private int $nbSeats = 4;
    private string $energy = "Petrol";
    private int $energyLevel;
    private bool $start = false;
    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;

    }
    
    public function start(): string
    {
        $this->start = true; 
        return "Car is started! ";
    }

    public function forward(): string
        {
            if ($this->start === false){
                return "Car is not powered on.";
            } else {
                    $this->currentSpeed = 15;
                    return "Go !";    
                    }

        }

        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
                }
            $sentence .= "I'm stopped !";
            return $sentence;
        }

        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }

        public function setNbWheels(string $nbWheels): void
        {
            $this->nbWheels = $nbWheels;
        }

        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if($currentSpeed >= 0) {
                $this->currentSpeed = $currentSpeed;
            }
        }

        public function getColor(): string
        {
            return $this->color;
        }

        public function setColor(string $color): void
        {
            $this->color = $color;
        }

        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }

        public function setNbSeats(int $nbSeats): void
        {
            $this->nbSeats = $nbSeats;
        }

        public function getEnergy(): string
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): void
        {
            $this->energy = $energy;
        }

        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            if(($energyLevel >= 0) && ($energyLevel <= 100)) {
                $this->energyLevel = $energyLevel;
            }
        }

        public function dump()
        {
            var_dump($this);
        }

}