<?php

require_once("shape.php");

class Triangle extends Shape {

    public function area(): float {
        return ($this->width*$this->height)/2;
    }
}

?>