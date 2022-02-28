<?php

require_once "vehicle.php";

class Truck extends Vehicle
{

    private int $storage_capacity;
    private int $cargo = 0;

    public function __construct(int $storage_capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage_capacity = $storage_capacity;
        $this->energy = $energy;
    }

    public function cargo_is_full()
    {

        if ($this->cargo === 0) {

            return "empty";
        } elseif ($this->cargo === $this->storage_capacity) {

            return "full";
        } elseif ($this->cargo > 0 && $this->cargo < $this->storage_capacity) {

            return "in filling";
        } else {

            return "Erreur chargement impossible";
        }
    }

    public function getStorageCapacity(): int
    {

        return $this->storage_capacity;
    }

    public function getCargo(): int
    {

        return $this->cargo;
    }

    public function setStorageCapacity(int $storage_capacity)
    {

        $this->storage_capacity = $storage_capacity;
    }

    public function setCargo(int $cargo)
    {

        $this->cargo = $cargo;
    }
}
