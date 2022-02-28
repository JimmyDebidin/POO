<?php

class Cars
{

    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 20;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Met les gaz, bro !";
    }


    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "freine !!!";
        }
        $sentence .= "c'est bon, la caisse est stoppée !";
        return $sentence;
    }

    public function start(): string
    {
        if ($this->currentSpeed == 0) {
            $start = true;
            return "J'ai démarrer la caisse";
        } else {
            return "t'avance déjà, mec";
        }
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

    public function getEnergylevel(): int
    {
        return $this->energyLevel;
    }
}
