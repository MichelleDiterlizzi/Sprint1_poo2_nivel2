<?php

require_once("shape.php");

class Rectangle extends Shape {

    public function area(): float {

        return $this->width*$this->height;
    }
}


?>