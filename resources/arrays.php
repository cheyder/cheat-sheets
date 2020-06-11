<?php

// Arrays associate values to keys. PHP arrays can contain integer (indexed array) and string (associatve array) keys.

// Arrays can be declared and accessed as follows:
$associative = [];
$associative = array('One' => 1, 'Two' => 2, 'Three' => 3);
$associative = ['One' => 1, 'Two' => 2, 'Three' => 3]; // PHP 5.4
echo $associative['One'] . "\n"; // => 1
$array = ['One', 'Two', 'Three'];
echo $array[0] . "\n"; // => "One"

//Manipulate arrays:
$associative['Four'] = 4; //set a value
$array[] = 'Four';
array_push($array, 'Five'); //Add an item at the end of the array
unset($associative['Two']); //Deletes the value of the key and the key itself, but doesn't reindex the keys. Better choice:
array_splice($array, 2); //Deletes the item with index "2" in $array.

echo count($associative) . "\n"; //counts elements in $associative


$wheels = [
    'bicycle' => 2, 
    'car' => 4, 
    'motorbike' => 2];

$countResult = 0;
foreach ($wheels as $wheel_count)
{
    $countResult += $wheel_count;
} // Prints "8"
echo 'Gesamtanzahl der Räder: ' . $countResult . "\n";


$countVehicles = count($wheels);
echo 'Anzahl der Fahrzeuge: ' . $countVehicles . "\n"; //Prints "3"

foreach ($wheels as $vehicle => $wheel_count)
{
    echo 'A '. $vehicle . ' got ' . $wheel_count . ' wheels.' . "\n";
}

$index = array_search(2, $wheels);// returns index or key of value, if existing
echo $index;