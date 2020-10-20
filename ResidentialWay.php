<?php

require_once 'Highway.php';

final class ResidentialWay extends HighWay
{
    public function __construct($nbLane, $maxSpeed)
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
            $this->currentVehicles[] = $vehicle;
    }
}