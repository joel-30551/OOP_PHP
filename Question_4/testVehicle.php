<?php
require_once "Vehicle.php";
require_once "Car.php";
require_once "Motorcycle.php";

$motorcycle1 = new Motorcycle("Suzuki");
$car1 = new Car("Benz");

echo"".$car1->startEngine()."<p>";
echo"".$motorcycle1->startEngine();
?>