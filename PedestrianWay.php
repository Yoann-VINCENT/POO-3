<?php

require_once 'Highway.php';

final class PedestrianWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(1, 10);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if(get_class($vehicle) === "Bicycle" || get_class($vehicle) === "Skateboard")
            $this->currentVehicles[] = $vehicle;
    }
}