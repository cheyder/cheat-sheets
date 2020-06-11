<?php
function add($x, $y = 1) { // setzt für y einen default value, falls keiner bei Funktionsaufruf übergeben wird
    $result = $x + $y;
    return $result;
}
echo add(1); // ergibt 2
echo add(5, 6); //ergibt 11

function distance($x1, $x2, $y1, $y2) {
    $result = sqrt(pow(($x2-$x1), 2) + pow(($y2-$y1), 2));
    echo $result;
}
 echo distance(1, 2, 3, 4);