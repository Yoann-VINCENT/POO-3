<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';

$vroum = new Car('blue',5, "flatulences");
$route = new MotorWay(5,5);
$route->addVehicle ($vroum);
var_dump ($route);

//Vélo sur MotorWay ? -> vélo n'est pas ajouté -> OK
$superSonicBike = new bicycle('green', 25);
$route->addVehicle ($superSonicBike);
var_dump ($route);

//Car + Bike sur Residential ? les deux sont ajoutés ->OK
$residWay = new ResidentialWay(5, 5);
$residWay->addVehicle ($vroum);
$residWay->addVehicle ($superSonicBike);
var_dump ($residWay);

//Car + Bike sur Pedestrian ? Seul le vélo est ajouté -> OK
$pedesWay = new PedestrianWay(5, 5);
$pedesWay->addVehicle ($vroum);
$pedesWay->addVehicle ($superSonicBike);
var_dump ($pedesWay);