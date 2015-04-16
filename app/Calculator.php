<?php

class Calculator
{
    function mul($a, $b) {
        return $a * $b;
    }

    function div($a, $b) {
        if ($b == 0) {
            throw new Exception('div by zero');
        }
        return $a / $b;
    }
}