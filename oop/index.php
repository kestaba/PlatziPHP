<?php

class Car{
    //public $owner;
    private $owner = 'Mike';

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

$car = new Car();
$car2 = new Car();

$car->move();

/*$car->owner = 'Alex';
echo 'Owner: ' . $car->owner;*/

$car->setOwner('Alex');
$car2->setOwner('Max');

echo '<br> Owner: ' . $car->getOwner();
echo '<br> Owner2: ' . $car2->getOwner();