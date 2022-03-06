<?php

require_once "Vehicle.php";
require_once "interface.lightable.php";

class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {

        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function setParkBrake(bool $hasParkBrake)
    {

        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake === true) {
            throw new Exception('Il y a le frein à main');
        }
        return "Démarrage, en avant !!";
    }
}
