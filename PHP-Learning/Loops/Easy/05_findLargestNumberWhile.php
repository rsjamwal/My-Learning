<?php

/**************************************************
 *                EASY - QUESTION 5
 *              File: 05_findLargestNumberWhile.php
 *              Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through all numbers
 *    from the starting number to the ending number.
 * 4. Finds the largest number in that range.
 * 5. Displays the largest number.
 *
 * Example:
 *
 * Enter starting number: 5
 * Enter ending number: 10
 *
 * Output:
 * The largest number is: 10
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use a counter.
 * - Use a variable to store the largest number.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$startingNumber = readline("Enter Starting Number: ");
$endingNumber = readline("Enter Ending Number: ");

$counter = $startingNumber;
$largestNumber = $startingNumber;

while ($counter <= $endingNumber) {

    if ($counter > $largestNumber) {
        $largestNumber = $counter;
    }
    $counter++;
}
echo "The largest number is: {$largestNumber}";
