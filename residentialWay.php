<?php

require_once "highway.php";

final class ResidentialWay extends Highway
{


    private int $nbLanes = 2;
    private int $maxSpeed = 50;


    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}
