<?php

/**************************************************
 *                EASY - QUESTION 7
 *              File: 07_sumOfNumbersWhile.php
 *              Topic: while loop + sum
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to find the sum of all
 *    numbers from the starting number to the
 *    ending number (inclusive).
 * 4. Displays the final sum.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 5
 *
 * Output:
 * The sum is: 15
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use a counter.
 * - Use a variable to store the sum.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$num = readline("Enter the number: ");
$limit = readline ("Enter the last number: ");

$counter = $num;
$sum = 0;

while($counter <= $limit){

$sum = $sum + $counter;
$counter++;

}
echo "Sum is : $sum";