<?php

/**************************************************
 *               EASY - QUESTION 12
 *          File: 12_skipMultiplesOfFive.php
 *          Topic: while loop + if + continue
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through every number
 *    from the starting number to the ending number.
 * 4. Skips every number that is divisible by 5.
 * 5. Prints all the remaining numbers.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 15
 *
 * Output:
 * 1 2 3 4 6 7 8 9 11 12 13 14
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use the modulus (%) operator.
 * - Use continue.
 * - Use a counter to move through the range.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$num1 = readline("Enter starting number :");
$num2 = readline("Enter ending number :");

$counter = $num1;

while($counter <= $num2){

if($counter % 5 == 0){
    $counter ++;
    continue;
}
    echo $counter . " ";
    $counter++;
    
}