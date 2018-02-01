<?php

class Vehicle{
    protected $owner;

    public function __construct($owner){
        $this->owner = $owner;
        echo 'construct <br>';
    }

    public function move(){
        echo 'moving <br>';
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }
}

class Car extends Vehicle{
    public function move(){
        echo 'Car: moving <br>';
    }
}

class Truck extends Vehicle{
    private $type;

    public function __construct($owner, $type){
        #parent::__construct($owner);
        $this->owner = $owner;
        $this->type = $type;
    }

    public function move(){
        echo 'Truck: '. $this->type . ' moving <br>';
    }
}

echo 'class car <br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner();

echo 'class truck <br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner();