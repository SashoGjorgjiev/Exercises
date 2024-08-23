<?php

abstract class Shape
{
    abstract public function calculateArea();
    abstract public function description();
}

class Circle extends Shape
{

    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function description()
    {

        echo "This is a circle.";
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function description()
    {
        echo "This is a rectangle.";
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(5, 10);

$circle->description();
echo 'Area of Circle:' . $circle->calculateArea() . '<br/>';

$rectangle->description();
echo 'Area of Rectangle' . $rectangle->calculateArea() . '<br/>';
