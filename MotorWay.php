<?php

require_once 'Highway.php';

final class MotorWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if(get_class($vehicle) === "Car")
            $this->currentVehicles[] = $vehicle;
    }
}