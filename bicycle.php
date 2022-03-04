<?php

require_once 'vehicle.php';
require_once "interface.lightable.php";


class Bicycle extends Vehicle implements LightableInterface
{

    protected int $currentSpeed = 1;

    public function switchOn(): bool
    {
        if ($this->currentSpeed > 10) {
            return true;
        } else {
            echo "Il faut pédaler plus vite pour allumer la lumière\n";
            return false;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }
}
