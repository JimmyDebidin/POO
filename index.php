<?php

require "cars.php";

$police_cars = new cars("blue", 5, "hydrogen");
$taxi = new cars("yellow", 5, "diesel");

echo $police_cars->start();
echo $police_cars->forward();
echo $police_cars->brake();

echo $taxi->start();
echo $taxi->forward();
echo $taxi->brake();

var_dump($police_cars);
