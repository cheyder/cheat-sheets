<?php
// https://learnxinyminutes.com/docs/php/

// Two forward slashes start a one-line comment.
# So will a hash (aka pound symbol) but // is more common
/* multi-line comment. */

print('Hello '); // Prints "Hello " with no line break
echo "World\n"; // (all statements must end with a semicolon)
var_dump($z); // prints int(0)
print_r($array); // prints: Array ( [0] => One [1] => Two [2] => Three )

$boolean = true;  // or TRUE or True
$int = -12;
$float = 1.234;

$sum = 1 + 1;
$difference = 2 - 1;
$product = 2 * 2;
$quotient = 2 / 1;
$sum += 1; 
echo $sum++;

// Strings should be enclosed in single quotes;
// Avoid using double quotes except to embed other variables
$sgl_quotes = 'String'; // => 'String'
$dbl_quotes = "This is a $sgl_quotes."; // => 'This is a String.'
$apples = "I have {$number} apples to eat.";
$oranges = "I have ${number} oranges to eat.";
echo 'This string ' . 'is concatenated'; // String concatenation

// Type casting
$boolean = (boolean) 1; // => true
$string = strval(5); // => '5'

if (3 < 1 && true) {
    print 'Does not print';
} elseif (1 === '1') {
    print 'Does not print';
} else {
    print 'Does print';
}

$i = 0;
while ($i < 5) {
    echo $i++;
    break; // Exit out of the while loop
    continue; // Skip this iteration of the loop
} // Prints "01234"

for ($x = 0; $x < 10; $x++) {
    echo $x;
} // Prints "0123456789"
