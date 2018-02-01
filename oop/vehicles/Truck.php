<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
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