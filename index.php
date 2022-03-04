<?php

require_once "car.php";
require_once "bicycle.php";
require_once "truck.php";
require_once "motorway.php";
require_once "pedestrianWay.php";
require_once "residentialWay.php";
require_once "skateboard.php";
require_once "speedometer.php";

$police_cars = new Car("blue", 5, "hydrogen");
$taxi = new Car("yellow", 5, "diesel");
$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');
$truck = new Truck(150, "purple", 2, "gasoil");
$truck2 = new Truck(220, "red", 8, "gas");
$truck3 = new Truck(50, "yellow", 2, "gasoil");
$skate = new Skateboard("blue", 1);

echo Speedometer::convert_km_to_miles(10);
echo Speedometer::convert_miles_to_km(12);



