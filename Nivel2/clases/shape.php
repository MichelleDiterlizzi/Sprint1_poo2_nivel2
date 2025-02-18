<?php

declare(strict_types=1);

abstract class Shape {
    
    protected $width;
    protected $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    abstract public function area(): float;

    public function __toString(): string {
        return "El área de la figura con ancho ".$this->width. " y alto ". $this->height. " es de " . $this->area() . ".";
    }
}

?>
