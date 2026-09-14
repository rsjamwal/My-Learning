<?php

/**************************************************
 *                EASY - QUESTION 6
 *              File: 06_multiplicationTableWhile.php
 *              Topic: while loop + counter
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a number from the user.
 * 2. Takes a limit from the user.
 * 3. Uses a while loop to print the multiplication
 *    table of that number up to the given limit.
 *
 * Example:
 *
 * Enter number: 5
 * Enter limit: 10
 *
 * Output:
 * 5 x 1 = 5
 * 5 x 2 = 10
 * 5 x 3 = 15
 * ...
 * 5 x 10 = 50
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use a counter.
 * - Use multiplication.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$number = readline("Enter the number: ");
$limit = readline("Enter the ending number: ");

$counter = 1;


while($counter <= $limit){

echo "{$number } x {$counter } =" .  ($number * $counter) . PHP_EOL;

$counter++;
}