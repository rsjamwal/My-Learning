<?php

/**************************************************
 *               EASY - QUESTION 13
 *           File: 13_printEvenNumbersWhile.php
 *           Topic: while loop + if condition
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to go through every number
 *    from the starting number to the ending number.
 * 4. Checks whether each number is EVEN.
 * 5. Prints only the even numbers.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 10
 *
 * Output:
 * Even numbers: 2 4 6 8 10
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

$num1 = readline("Enter First number: ");
$num2 = readline("Enter Last number: ");

$counter = $num1;

while ($counter <= $num2) {

    if ($counter % 2 == 0) {

        echo $counter . " ";
        $counter++;
    } else {
        $counter++;
    }
}
