<?php

/**************************************************
 *                EASY - QUESTION 3
 *              File: 03_sumNumbersWhile.php
 *              Topic: while loop + counter
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to calculate the sum of
 *    all numbers from the starting number to the
 *    ending number.
 * 4. Display the final sum.
 *
 * Example:
 *
 * Enter starting number: 1
 * Enter ending number: 5
 *
 * Output:
 * The sum of numbers from 1 to 5 is: 15
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use a counter.
 * - Use a variable to store the running sum.
 * - Make sure the counter is updated correctly.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$startingNumber = readline("Enter Staring number: ");
$lastNumber = readline("Enter Last Number: ");

echo "The sum between {$startingNumber} and {$lastNumber} is : ";
$counter = $startingNumber;
$sum = 0;
while($counter<=$lastNumber){
$sum = $sum + $counter;
$counter++;
}
echo "$sum";