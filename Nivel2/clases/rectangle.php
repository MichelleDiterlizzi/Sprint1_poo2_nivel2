<?php
declare(strict_types=1);
require_once("shape.php");

class Rectangle extends Shape {

    public function area(): float {

        return $this->width*$this->height;
    }
}


?>