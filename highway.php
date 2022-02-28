<?php

abstract class Highway
{

    protected array $currentVehicles = [];
    protected int $nbLanes;
    protected int $maxSpeed;

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        $this->nbLanes = $nbLanes;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {

        return $this->currentVehicles;
    }

    public function nbLanes(): int
    {

        return $this->nbLanes;
    }

    public function getMaxSpeed(): int
    {

        return $this->maxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles)
    {

        $this->currentVehicles = $currentVehicles;
    }

    public function setNbLanes(int $nbLanes)
    {
        $this->nbLanes = $nbLanes;
    }

    public function setMaxSpeed(int $maxSpeed)
    {

        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicle(string $vehicle);
}
