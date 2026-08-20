<?php

//Type casting example
$number = "10";
$numberTypeCast = (int)$number; //Type casting string to integer

print $numberTypeCast . PHP_EOL;

print gettype($number) . PHP_EOL; //gettype function is used to get the type of a variable.
print gettype($numberTypeCast) . PHP_EOL; //gettype function is used to get the type of a variable.
