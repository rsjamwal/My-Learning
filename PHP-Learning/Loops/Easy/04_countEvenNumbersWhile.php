<?php

/**************************************************
 *                EASY - QUESTION 4
 *              File: 04_countEvenNumbersWhile.php
 *              Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through all numbers
 *    from the starting number to the ending number.
 * 4. Counts how many EVEN numbers are present.
 * 5. Displays the total count of even numbers.
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

$startingNumber = readline("Enter Starting Number :");
$endingNumber = readline("Enter Ending Number: ");

$counter = $startingNumber;
$evenCount = 0;

while ($counter <= $endingNumber) {
    if ($counter % 2 == 0) {
        $evenCount++;
    }
    $counter++;
}
echo "total count of even numbers are: {$evenCount}";
