<?php

/**************************************************
 *               EASY - QUESTION 10
 *            File: 10_printMultiplesWhile.php
 *            Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through every number
 *    from the starting number to the ending number.
 * 4. Checks which numbers are divisible by 3.
 * 5. Prints all numbers that are divisible by 3.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 15
 *
 * Output:
 * Numbers divisible by 3:
 * 3 6 9 12 15
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use the modulus (%) operator.
 * - Use a counter to move through the range.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");

$counter =  $num1;
$numberDivisibleBy3 = 0;

while($counter <= $num2){

if($counter % 3 == 0){
    $numberDivisibleBy3++;
}
$counter++;
}
echo "Total numbers divisible by 3 is: {$numberDivisibleBy3}";