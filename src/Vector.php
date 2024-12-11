<?php

namespace App;

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo($otherVector)
    {
        // Two vectors are perpendicular if their dot product is 0
        return ($this->x * $otherVector->x + $this->y * $otherVector->y) == 0;
    }

    public function __toString()
    {
        return "Vector(x: {$this->x}, y: {$this->y})";
    }
}
