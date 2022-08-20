<?php
class Vector
{
    private $x;
    private $y;


    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function sum($a, $b)
    {
        $x = $a->x + $b->x;
        $y = $a->y + $b->y;
        return new Vector($x, $y);
    }

    public static function difference($a, $b)
    {
        $x = $a->x - $b->x;
        $y = $a->y - $b->y;
        return new Vector($x, $y);
    }

    public static function numberMultiply($a, $k)
    {
        $x = $a->x * $k;
        $y = $a->y * $k;
        return new Vector($x, $y);
    }

    public static function print($a)
    {
        $x = $a->x;
        $y = $a->y;
        return print("Вектор ($x; $y)");
    }
}
