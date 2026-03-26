<?php
// https://exercism.org/tracks/php/exercises/windowing-system/edit
class ProgramWindow
{
    public $y;
    public $x;
    public $height;
    public $width;

    function __construct()
        {
            $DEFAULT_ZERO = 0;
            $this->y = $DEFAULT_ZERO;
            $this->x = $DEFAULT_ZERO;
            $this->height = 600;
            $this->width = 800;
        }

    function resize (Size $size)
    {
        $this->height = $size->height;
        $this->width = $size->width;
    }

    function move(Position $position)
    {
        $this->y = $position->y;
        $this->x = $position->x;
    }
}

class Size
{
    function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }
}

class Position
{
    function __construct($y, $x)
    {
        $this->y = $y;
        $this->x = $x;
    }
}