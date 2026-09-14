<?php

/**************************************************
 *                PRACTICE - EVEN SKIPPING
 *              Topic: while loop + continue
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes a destination number from the user.
 * 3. Uses a while loop to print only the ODD numbers.
 * 4. Skip all EVEN numbers using the continue statement.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter destination number: 10
 *
 * Output:
 * 1 3 5 7 9
 *
 * Requirements:
 * - Use user input.
 * - Use a while loop.
 * - Use continue to skip even numbers.
 * - Use a counter.
 * - Make sure the counter is updated correctly.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below


$startingNumber = readline("Enter Starting Number:");
$endingNumber = readline("Enter Ending Number:");

$counter = $startingNumber;

echo "The numbers between {$counter} and {$endingNumber} is:";

while ($counter <= $endingNumber) {

    if ($counter % 2 == 0) {
        $counter++;
        continue;
    }
    echo "$counter ";
    $counter++;
    
}
