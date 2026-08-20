<?php

//Type juggling in PHP example

$number = "10"; //string
$result = $number + 5; //PHP automatically converts string to integer for addition.

print $result . PHP_EOL; //This is an example of type juggling in PHP where the string is automatically converted to a number.


//Type juggling in PHP example

$isDutyFree = true; //boolean
print $isDutyFree . PHP_EOL; //This will print 1 because true is converted to 1 in PHP.

$isPresent = false; //boolean
print $isPresent . PHP_EOL; //This will print nothing because false is converted to zero in PHP.