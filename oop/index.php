<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

/*use Vehicles\Car;
use Vehicles\Truck;*/

use Vehicles\{Car, Truck};

echo 'class car <br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner();

echo 'class truck <br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner();