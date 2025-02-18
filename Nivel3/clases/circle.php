<?php

declare(strict_types=1);
require_once("shape.php");

class Circulo implements Shape {

    private $radio;

    public function __construct(float $radio){

        $this->radio = $radio;
    }

    public function area(): float {
        return pi()* pow($this->radio, 2);
    }

    public function __toString(): string {
        return "El área del Circulo con radio ".$this->radio. " es de " . $this->area() . ".";
    }
}

?>