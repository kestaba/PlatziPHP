<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

/*use Vehicles\Car;
use Vehicles\Truck;*/

use Vehicles\{Car, Truck};

echo 'class car <br>';
$car = new Car('Alex');
$car->move();

echo '<br>';

echo 'class truck 1 <br>';
$truck1 = new Truck('Alex', 'Pickup');
$truck1->move();

echo '<br>';

echo 'class truck 2 <br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

//echo '<br> Total Trucks: ' . Truck::$count. '<br>';
echo '<br> Total Trucks: ' . Truck::getTotal(). '<br>';

/*$v1 = new \Vehicles\VehicleBase('Alex');
$v1->move();*/

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner().'<br>';