<?php

/**************************************************
 *               EASY - QUESTION 11
 *          File: 11_findFirstMultipleOfSeven.php
 *          Topic: while loop + if + break
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to check every number
 *    from the starting number to the ending number.
 * 4. Finds the FIRST number that is divisible by 7.
 * 5. As soon as the first such number is found,
 *    stop the loop using break.
 * 6. Display the number found.
 * 7. If no number is divisible by 7, display:
 *    "No multiple of 7 found."
 *
 * Example:
 *
 * Enter starting number: 10
 * Enter ending number: 30
 *
 * Output:
 * First multiple of 7: 14
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use the modulus (%) operator.
 * - Use break.
 * - Use a counter to move through the range.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$num1 = readline("Enter starting number: ");
$num2 = readline("Enter ending number: ");

$counter = $num1;

while ($counter <= $num2) {

    if ($counter % 7 == 0) {
        break;
    }
    $counter++;
}
echo "First number that is divisible by 7 is : {$counter}";
