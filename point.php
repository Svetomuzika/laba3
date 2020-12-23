<?php
class Point{
    public $x;

    public $y;

    function Rotate($x, $x1, $y, $y1){
        echo '<br>'.($x += $x1)."-";
        echo ($y += $y1).'<br>';
    }
}

class Vector{
    public $x;

    public $y;

    function Lenght($x, $y){
        $a = sqrt($x*$x + $y*$y);
        echo round($a, 2)."\n";
        return $a;
    }

    function Null($x, $y) {
        if (($this->Lenght($x, $y)) == 0)
            echo "- Нулевой Вектор".'<br>';
        else
            echo "- Ненулевой вектор".'<br>';
    }

    function Angle($x, $x1, $y, $y1){
        if(($x*$x1 + $y*$y1) == 0)
            echo "Векторы перпендикулярны";
        else
            echo "Векторы неперпендикулярны";
    }
}