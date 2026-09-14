<?php

/**************************************************
 *                EASY - QUESTION 1
 *              File: 01_printNumbersWhile.php
 *              Topic: while loop
 **************************************************
 *
 * Write a PHP program that:
 *
 * 1. Takes a starting number from the user.
 * 2. Takes an ending number from the user.
 * 3. Uses a while loop to print all numbers
 *    from the starting number to the ending number.
 *
 * Example:
 *
 * Starting number: 1
 * Ending number: 5
 *
 * Output:
 * 1
 * 2
 * 3
 * 4
 * 5
 *
 * Requirements:
 * - Take input from the user.
 * - Use a while loop.
 * - Use a counter variable.
 * - Make sure the loop terminates.
 * - Use camelCase variable names.
 * - Do not use HTML.
 *
 **************************************************/

// Write your solution below

$initilizationCounter = readline("Enter your Starting number:");
$destinationLimit = readline("Enter your Destination Number:");


echo "The numbers from {$initilizationCounter} to {$destinationLimit} are: ";
while ($initilizationCounter <= $destinationLimit) {
    
    echo "{$initilizationCounter} ";
    $initilizationCounter++;
}

