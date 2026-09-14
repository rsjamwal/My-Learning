<?php

/**************************************************
 *               EASY - QUESTION 14
 *             File: 14_sumEvenNumbersWhile.php
 *             Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through every number
 *    from the starting number to the ending number.
 * 4. Checks whether each number is EVEN.
 * 5. Adds only the even numbers to a total sum.
 * 6. Displays the final sum.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 10
 *
 * Even numbers:
 * 2 4 6 8 10
 *
 * Output:
 * Sum of even numbers: 30
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use an if condition.
 * - Use the modulus (%) operator.
 * - Use a counter to move through the range.
 * - Use a separate variable to store the sum.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$num1 = readline("Enter starting number: ");
$num2 = readline("Enter ending number: ");

$counter = $num1;
$sum = 0;

while ($counter <= $num2) {

    if ($counter % 2 == 0) {

        echo $counter . " ";

        $sum = $sum + $counter;

        $counter++;
    } else {
        $counter++;
    }
}
echo PHP_EOL . "Sum of even numbers: " . $sum;
