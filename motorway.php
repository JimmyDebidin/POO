<?php

require_once "highway.php";

final class MotorWay extends Highway
{

    private int $nbLanes = 4;
    private int $maxSpeed = 130;


    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo 'Non autorisé sur cette route';
        }
    }
}
