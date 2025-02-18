<?php

require_once('clases/shape.php');
require_once('clases/rectangle.php');
require_once('clases/triangle.php');
require_once('clases/circle.php');

    $triangle1 = new Triangle(3,7);
    $rectangulo1 = new Rectangle(5,6);
    $circulo1 = new Circulo(10);


    echo $triangle1.PHP_EOL;
    echo $rectangulo1.PHP_EOL;
    echo $circulo1.PHP_EOL;
?>