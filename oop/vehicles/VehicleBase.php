<?php

namespace Vehicles;

abstract class VehicleBase{
    protected $owner;

    public function __construct($owner){
        $this->owner = $owner;
        echo 'construct <br>';
    }

    public function move(){
        echo $this->startEngine(). '<br>';
        echo 'moving <br>';
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public abstract function startEngine();
}
