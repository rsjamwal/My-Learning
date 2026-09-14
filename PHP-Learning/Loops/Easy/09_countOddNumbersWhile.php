<?php

/**************************************************
 *                EASY - QUESTION 9
 *              File: 09_countOddNumbersWhile.php
 *              Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through every number
 *    from the starting number to the ending number.
 * 4. Counts how many ODD numbers are present.
 * 5. Displays the total count of odd numbers.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 10
 *
 * Output:
 * Total odd numbers: 5
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use a counter to move through the range.
 * - Use a separate variable to count odd numbers.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below


$num1 = readline("Enter first number: ");
$num2 = readline("Enter last number: ");

$counter = $num1;
$oddCount = 0;

while ($counter <= $num2) {

    if ($counter % 2 == 1) {
        $oddCount++;
    }
    $counter++;
}

echo "Total odd numbers between {$num1} and {$num2} are : {$oddCount} ";
