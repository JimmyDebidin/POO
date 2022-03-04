<?php

require_once "highway.php";

final class ResidentialWay extends Highway
{


    protected int $nbLanes = 2;
    protected int $maxSpeed = 50;


    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}
