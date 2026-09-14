<?php

/**************************************************
 *                EASY - QUESTION 8
 *              File: 08_countEvenNumbersWhile.php
 *              Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to count how many EVEN
 *    numbers exist between the starting number
 *    and ending number (inclusive).
 * 4. Displays the total count of even numbers.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 10
 *
 * Output:
 * Total even numbers: 5
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use a counter.
 * - Use a separate variable to store the count.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below


$num1 = readline("Enter Starting number:");
$num2 = readline("Enter Ending Number:");

$counter = 0;
echo "The number of elements that are divisible between {$num1} and {$num2} are: {$counter}";
while($num1 <= $num2){

if($num1 % 2 == 0){
    $counter++;
    
}
    $num1++;
}

