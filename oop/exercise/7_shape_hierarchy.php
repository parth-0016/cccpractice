<?php
    class Shape {
    // Common properties/methods for all shapes
    }

    class Circle extends Shape {
    public $radius;
        public function calculateArea() {
            return pi() * pow($this->radius, 2);
        }
        public function calculatePerimeter() {
            return 2 * pi() * $this->radius;
        }
    }

    class Rectangle extends Shape {
    public $length;
    public $width;
        public function calculateArea() {
            return $this->length * $this->width;
        }
        public function calculatePerimeter() {
            return 2 * ($this->length + $this->width);
        }
    }

    $circle = new Circle();
    $circle->radius = 100;

    $rectangle = new Rectangle();
    $rectangle->length = 3;
    $rectangle->width = 7;

    echo "Circle Area: " . $circle->calculateArea() . "<br>";
    echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter();
?>