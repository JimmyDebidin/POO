<?php

require_once "highway.php";

final class PedestrianWay extends Highway
{
    protected int $nbLanes = 1;
    protected int $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
        } else {
            echo 'Pas autorisé sur cette route';
        }
    }
    
}
