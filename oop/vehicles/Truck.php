<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase{
    //public static $count = 0;
    private static $count = 0;
    private $type;

    public function __construct($owner, $type){
        $this->owner = $owner;
        $this->type = $type;
        self::$count++;
    }

    public static function getTotal(){
        return self::$count;
    }

    public function startEngine(){
        return 'Truck: start engine';
    }
}