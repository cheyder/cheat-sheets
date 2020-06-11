<?php

function divide ($x, $y) {
    if ($y === 0)  {
        throw new Exception('Can`t divide by zero');
    } else {
        return $x / $y;
    }
}

try {
    divide(2, 0);
} catch (Exception $e) {
    echo "Hallo";
}