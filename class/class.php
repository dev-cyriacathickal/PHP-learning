<?php

class Car {

    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor(): string {
        return $this->color;
    }
}

$car = new Car('red');
echo $car->color . "\n"; //invoking by property
echo $car->getColor(); //invoking by method