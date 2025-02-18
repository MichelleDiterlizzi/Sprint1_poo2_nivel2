<?php

declare(strict_types=1);

require_once("shape.php");

class Triangle implements Shape {

    private $width;
    private $height;

    public function __construct(float $width, float $height){

        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float {
        return ($this->width*$this->height)/2;
    }

    public function __toString(): string {
        return "El área del triangulo con ancho ".$this->width. " y alto ". $this->height. " es de " . $this->area() . ".";
    }
}

?>