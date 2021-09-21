<?php

function maximum($a, $b, $c, $d, $e, $f)
{
    function max2($a, $b)
    {
        return  $a > $b ? $a : $b;
    }
    return max2(max2(max2(max2(max2($a, $b), $c), $d), $e), $f);

    // $result = 0;
    // $result = $result < $a ? $result = $a : $result;
    // $result = $result < $b ? $result = $b : $result;
    // $result = $result < $c ? $result = $c : $result;
    // $result = $result < $d ? $result = $d : $result;
    // $result = $result < $e ? $result = $e : $result;
    // $result = $result < $f ? $result = $f : $result;
    // return $result;
}

echo maximum(-3, -8, 5, 7, 7, 13);
