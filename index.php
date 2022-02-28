<?php

require_once "car.php";
require_once "bicycle.php";
require_once "truck.php";
require_once "motorway.php";
require_once "pedestrianWay.php";
require_once "residentialWay.php";

$police_cars = new Car("blue", 5, "hydrogen");
$taxi = new Car("yellow", 5, "diesel");
$bicycle = new Bicycle('blue', 1);
$car = new Car('green', 4, 'electric');


$truck = new Truck(150, "purple", 2, "gasoil");
$truck2 = new Truck(220, "red", 8, "gas");
$truck3 = new Truck(50, "yellow", 2, "gasoil");



$road66 = new MotorWay(4, 130);
























// echo $truck->forward();
// echo $truck->brake();
// $truck->setStorageCapacity(200);
// $truck->setCargo(200);
// echo $truck->getStorageCapacity();
// echo $truck->getCargo();
// echo $truck->cargo_is_full();

// echo $truck2->forward();
// echo $truck2->brake();
// $truck2->setStorageCapacity(120);
// $truck2->setCargo(0);
// echo $truck2->getStorageCapacity();
// echo $truck2->getCargo();
// echo $truck2->cargo_is_full();

// echo $truck3->forward();
// echo $truck3->brake();
// $truck3->setStorageCapacity(80);
// $truck3->setCargo(60);
// echo $truck3->getStorageCapacity();
// echo $truck3->getCargo();
// echo $truck3->cargo_is_full();


