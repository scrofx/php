<?php

namespace App;

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($dx)
    {
        $this->x += $dx;
    }

    public function moveY($dy)
    {
        $this->y += $dy;
    }

    public function moveByVector($vector)
    {
        $this->x += $vector->x;
        $this->y += $vector->y;
    }

    public function __toString()
    {
        return "Point(x: {$this->x}, y: {$this->y})";
    }
}
