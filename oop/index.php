<?php

class Car{
    //public $owner;
    private $owner;

    public function __construct($owner){
        $this->owner = $owner;
        echo 'construct <br>';
    }

    public function __destruct(){
        echo 'destruct <br>';
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

echo 'class car <br>';

$car = new Car('Alex');
$car2 = new Car('Mike');

$car->move();

/*$car->owner = 'Alex';
echo 'Owner: ' . $car->owner;*/

/*$car->setOwner('Alex');
$car2->setOwner('Max');*/

echo '<br> Owner: ' . $car->getOwner();
echo '<br> Owner2: ' . $car2->getOwner();