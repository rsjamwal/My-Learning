<?php
print "========================EASY====================================" . PHP_EOL;

/*
 * Q1. Create a PHP variable named $studentName and assign your name to it.
 * Then, print the value of the variable.
 */
$studentName = "Rohit Jamwal";
print $studentName . PHP_EOL;

print "================================================================" . PHP_EOL;

/*
 * Q2. Check String Type:
 * Create a PHP variable named $cityname and assign your city name to it.
 * Then use the gettype() function to check the type of the variable and print it.
 *
 * gettype() is a builtin PHP function that returns the type of a variable.
 */
$cityName = "Jammu";
print gettype($cityName) . PHP_EOL;

print "================================================================" . PHP_EOL;

/*
 * Q3. use var_dump()
 * Create a PHP variable named $courseName and assign a course name PHP to it.
 * Then use the var_dump() function to print the value and type of the variable.
 *
 * Definition: var_dump() is a built in PHP function that displays both its datatype and value. 
 * It is useful for debugging purposes.
 */
$courseName = "PHP Programming";
var_dump($courseName);

print "================================================================" . PHP_EOL;

/*
 * Q4. Use var_dump() function to print below:
 *     $name = "PHP";
 *     $age = 25;
 *     $price = 99.50;
 *     $isActive = true;
 *     $isPresent = false;
 */
$name = "PHP";
$age = 25;
$price = 99.50;
$isActive = true;
$isPresent = false;

var_dump($name);
var_dump($age);
var_dump($price);
var_dump($isActive);
var_dump($isPresent);

print "======================================================================" . PHP_EOL;

/*
 * Q5. Use gettype() function to print below:
 *
 *     $name = "PHP";
 *     $age = 25;
 *     $price = 99.50;
 *     $isActive = true;
 *     $isPresent = false;
 */
$name = "PHP";
$age = 25;
$price = 99.50;
$isActive = true;
$isPresent = false;

print gettype($name) . PHP_EOL;
print gettype($age) . PHP_EOL;
print gettype($price) . PHP_EOL;
print gettype($isActive) . PHP_EOL;
print gettype($isPresent) . PHP_EOL;

print "=================================================================" . PHP_EOL;

/*
 * Important observation : 
 *
 * We might think:
 * "Wait! var_dump() says FLOAT, but gettype() says DOUBLE. Does that mean the variable changed?"
 * No.
 *
 * This is because in PHP, float and double 
 * are used interchangeable to represent floating-point numbers. 
 * The gettype() function returns double for floating-point numbers, while var_dump() displays float.
 *
 *                 $price = 99.50
 *                     |
 *                     v
 *             Floating-point number
 *                  /         \
 *                 /           \
 *         var_dump()         gettype()
 *             |                  |
 *             v                  v
 *        "float(99.5)"       "double"
 *
 * float and double are like two different names/labels for the same thing: 
 * var_dump() calls it float, while gettype() calls it double; the value is still the same floating-point
 * numbers.
 */

/*
 * Q6. String Length:
 * Create a PHP variable named $studentName and assign your name to it.
 * Then use the appropriate PHP built-in function to find the Length and the number of characters in the string.
 */
$studentName = "Rohit Jamwal";
// strlen() is a built-in PHP function that returns the length of a string.
print strlen($studentName) . PHP_EOL;

print "=================================================================" . PHP_EOL;

/*
 * Q7. Check whether a Variable is a String:
 * Create a PHP variable named $studentName and assign your name to it.
 * Use is_string() and var_dump() functions to check wthether the variable is a string or not and print the result. 
 */
$studentName = "123";

// is_string() checks whether a variable is a string and returns either true or false, 
// but it does not automatically print the result. Because you don't store or print 
// that returned value, you never see it. So, to display the result, use var_dump() with is_string().
is_string($studentName);

// var_dump() is a built-in PHP function that displays both the data type and value. 
// It is useful for debugging purposes.
var_dump(is_string($studentName));

// The KEY-CONCEPT to Remember:
// is_string() → checks and returns true/false
// var_dump()  → displays the result

print "=================================================================" . PHP_EOL;

/*
 * Q8. Check whether a variable is not a string:
 * Create a PHP variable named $countryName and assign your country name to it.
 * Use is_string() and var_dump() functions to check whether the variable is not a string and print the result.
 */

// is_string() checks whether something is a string. 
// It doesn't directly check whether something is not a string.
// To check if a variable is not a string, you can use the logical NOT operator (!).
$countryName = "U.S.A";

// This will return true beccause $countryName is a string.
var_dump(is_string($countryName));

// This will return false becuase $countryName is a string, so !is_string($countryName) is false.
var_dump(!is_string($countryName));

print "=================================================================" . PHP_EOL;

/*
 * Q9. Numeric String:
 * Create a PHP variable named $studentAge and assign your age.
 * Use is_numeric() and var_dump() functions to check whether the value of the variable
 * is a numeric string or not and print the result.
 */

// This is a numeric string because it contains a numeric value 40, even though it is stored as a string.
$studentAge = "40";

// This will return true because $studentAge is a numeric string.
var_dump(is_numeric($studentAge));

/*
 * $studentAge = "40"
 *              ↓
 *        string (data type)
 *              ↓
 *        Contains numeric value
 *              ↓
 *        numeric string
 *              ↓
 * is_numeric() → true
 *
 * $age = "40";   // numeric string
 * $age = "hello"; // non-numeric string
 * $age = 40;     // integer, NOT a string
 */

print "=================================================================" . PHP_EOL;

/* 
 * Q10. Check for a Non-Numeric String:
 * Create a PHP variable named $checkString that takes a string as an argument
 * and checks whether the string is non-numeric or not.
 * Use the is_numeric() and var_dump() functions to check whether the given
 * string is non-numeric.
 */

// This is a string, but its content is not numeric, so it is a non-numeric string.
$checkString = "Hello World!";

// This will return true because $checkString is a non-numeric string. 
// The logical NOT operator (!) negates the result of is_numeric().
var_dump(!is_numeric($checkString));

print "=================================================================" . PHP_EOL;

/*
 * Q11. Empty String:
 * 
 * a. Create a PHP variable named $emptyString and assign an empty string to it.
 * Use the empty() and var_dump() functions to check whether the variable
 * contains an empty string and print the result.
 * 
 * b. Create a PHP variable named $middleName and assign an empty string to it.
 * Use the following functions:
 * - var_dump()
 * - is_string()
 * - is_numeric()
 * Determine what each function returns when applied to $middleName.
 */

$emptyString = ""; // This is an empty string because it contains no characters.
var_dump(empty($emptyString)); // This will return true because $emptyString is empty.
var_dump(strlen($emptyString)); // This will return 0 and its datatype is integer because $emptyString is empty and has no characters.

$middleName = ""; // This is an empty string because it contains no characters.
var_dump(is_string($middleName)); // This will return true because $middleName is a string, even though it is empty.
var_dump(is_numeric($middleName)); // This will return false because $middleName is a string, and it does not contain a numeric value.

// ""     → empty string → 0 characters
// " "    → space        → 1 character -> Non-Empty String
// "   "  → spaces       → 3 characters -> Non-Empty String

print "=================================================================" . PHP_EOL;
print "=====================MEDIUM QUESTIONS============================" . PHP_EOL;

/*
 * Q12. String Concatenation:
 * Create two PHP variables named $firstName and $lastName and assign your
 * first name and last name to them, respectively.
 * Concatenate these two variables and create a new variable named $fullName.
 * Then print the full name.
 */
$firstName = "Rohit";
$lastName = "Jamwal";
$fullName = $firstName . " " . $lastName; // The dot operator (.) is the string concatenation operator in PHP 

print ($fullName) . PHP_EOL;

print "=================================================================" . PHP_EOL;

/*
 * Q13. String + Integer:
 * Create
 * $studentName: "Rohit" (String)
 * $studentAge: "20" (String)
 * Use String concatenation to produce:
 * Rohit is 20 years old.
 * Do not convert $studentAge manually
 */
$studentName = "Rohit";
$studentAge = "20";

$output = $studentName . " is " . $studentAge . " Years Old" . PHP_EOL;
print($output);

/*
 * STRING CONCATENATION — SPACING PATTERN
 *
 * In PHP:
 * - "text"       → literal text
 * - $variable    → value stored in a variable
 * - .            → concatenates (joins) the pieces together
 * - " "          → one space
 *
 * Example:
 * $studentName = "Rohit";
 * $studentAge = "20";
 * $output = $studentName . " is " . $studentAge . " Years Old";
 *
 * Output:
 * Rohit is 20 Years Old
 *
 * Why do we write " is " with TWO spaces?
 *
 * " is "
 *    " is "
 *    │ │ │
 *    │ │ └── space
 *    │ └──── "is"
 *    └────── space
 *
 * It has:
 * [space]is[space]
 *
 * Because "is" is between two values:
 * Rohit[space]is[space]20
 *
 * Why do we write " Years Old" with ONE space?
 *
 * " Years Old"
 *
 * It has:
 * [space]Years Old
 *
 * Because it comes after $studentAge and is at the end:
 * 20[space]Years Old
 *
 * GENERAL PATTERN:
 * 
 * If text is between two values:
 * $first . " text " . $second
 * Example:
 * $name . " is " . $age
 *
 * If text comes after a value and ends the sentence:
 * $first . " text"
 * Example:
 * $age . " Years Old"
 *
 * IMPORTANT:
 * The dot (.) does NOT create a space.
 * Quotes ("") do NOT automatically create a space.
 * If you want a space in the output, you must type the space inside the quotes.
 *
 * For example:
 * $name . " " . $age
 * The " " contains exactly ONE space.
 *
 * Remember:
 * Quotes → literal text
 * $variable → stored value
 * . → joins the pieces
 * " " → one space
 */

print "=================================================================" . PHP_EOL;

/*
 * Q14. Write PHP code that produces this exactly:
 * ========== STUDENT PROFILE ==========
 * Name: Rahul Kumar
 * Age: 20 Years Old
 * Course: PHP Development
 * Institute: ABC Coding Academy
 * Location: Jammu, Jammu & Kashmir
 * Experience: Beginner
 * Goal: Become a Professional PHP Developer
 * ======================================
 * $firstName
 * $lastName
 * $age
 * $course
 * $institute
 * $city
 * $state
 * $experience
 * $goal
 * Rules:
 *   Use concatenation with .
 *   Use variables for the values
 *   Use PHP_EOL for the new lines
 *   Create one $output
 *   Print $output once
 *   Do not copy the complete output as one giant string
 * 
 * This last one is particularly good practice because you'll have to think about spaces, 
 * punctuation, variables, and PHP_EOL at the same time.
 */

$firstName = "Rahul";
$lastName = "Kumar";
$age = 20;
$course = "PHP";
$institute = "AVM";
$city = "Jammu";
$state = "state";
$experience = "Beginner";
$goal = "PHP Delevoper";

$output = "===========STUDENT PROFILE=================" . PHP_EOL . PHP_EOL
     . "Name: " . $firstName . " " . $lastName . PHP_EOL
     . "Age: " . $age . " Years " . "Old" . PHP_EOL
     . "Course: " . $course . " Development" . PHP_EOL
     . "Institute : " . $institute . " Smart " . "Academy" . PHP_EOL
     . "Location: " . $city . ", " . "Jammu " . "&" . " Kashmir" . PHP_EOL
     . "Experience: " . $experience . PHP_EOL
     . "Goal: " . "Become" . " a " . "Professional " . $goal . PHP_EOL
     . "============================================" . PHP_EOL;

echo ($output) . PHP_EOL;

print "=============================================" . PHP_EOL;
var_dump($output);

print "====================================================================" . PHP_EOL;

/*
 * Q15. String + Integer
 * Create:
 * $studentName = "Rohit";
 * $studentAge = 20;
 * Use string concatenation to produce:
 * Rohit is 20 years old.
 * Do not convert $studentAge manually.
 */

$studentName = "Rohit";
$studentAge = 20;

$output = $studentName . " is " . $studentAge . " Years " . "old." . PHP_EOL;
echo ($output) . PHP_EOL;

print "====================================================================" . PHP_EOL;

/*
 * Q16. Numeric String + Integer
 * Create:
 * $numberText = "10";
 * $number = 5;
 * Add them together and use var_dump() on the result.
 * Determine:
 *      • What type is the result? 
 *      • What is the value? 
 *      • Why did PHP convert the string? 
 */

$numericString = "10";
$number = 5;

$output = $numericString + $number;
echo ($output) . PHP_EOL;

var_dump($output);

// What type is the result? 
// Answer: Integer (because type juggling turned the text "10" into a number to do math).

// What is the value? 
// Answer: 15 (a pure number).

// Why did PHP convert the string? 
// Answer: Because type juggling automatically changes data types when needed—here, the plus (+) 
// operator told PHP to treat the text "10" as a number so it could add them together.

print "====================================================================" . PHP_EOL;

/*
 * Q17. Numeric String Containing a Float
 *
 * Create:
 * $priceText = "9.99";
 * $tax = 2;
 *
 * Add them together and use var_dump().
 * Determine whether the result is an int or float.
 */

// ================================================================
// Answer for Q17:
// ================================================================

$priceText = "9.99";
$tax = "2";

$output = $priceText + $tax;

echo ($output) . PHP_EOL;
var_dump($output);
var_dump(gettype($output));

/*
 * EXPLANATION:
 *
 * 1. Is it correct?
 *    Yes!
 *
 * 2. What happens here?
 *    - The plus (+) sign tells PHP to do math.
 *    - PHP automatically converts "9.99" into a float (9.99).
 *    - PHP automatically converts "2" into a number (2).
 *    - 9.99 + 2 = 11.99
 *
 * 3. What data type is the result?
 *    - The result is a float (decimal number).
 *    - var_dump($output) shows: float(11.99)
 *    - gettype($output) returns: "double" (double and float mean the same thing in PHP).
 */

print "================================================================" . PHP_EOL;
/*
 * Q18. Numeric String Containing a Float + Integer:
 *
 * Task:
 * 1. Create a variable named $priceText and assign the numeric string "9.99" to it.
 * 2. Create a variable named $tax and assign the integer 2 to it.
 * 3. Add $priceText and $tax together and store the result in a variable named$total.
 * 4. Print the result using echo / print.
 * 5. Use var_dump() on the result to inspect its data type and value.
 *
 * Questions to answer in comments:
 * - What is the value of the result?
 * - Is the result an int or a float?
 * - Why does PHP produce that data type?
 *
 * Concept to remember:
 * When using the addition operator (+), PHP automatically converts (type juggles) 
 * a numeric string like "9.99" into a float. Adding a float and an integer always 
 * results in a float.
 */

// ================================================================
// Answer for Q18:
// ================================================================

$priceText = "9.99";
$tax = 2;

$output = $priceText + $tax;

echo ($output) . PHP_EOL;
var_dump($output);
var_dump(gettype($output));

/*
 * EXPLANATION (TYPE JUGGLING):
 *
 * 1. Is it correct?
 *    Yes!
 *
 * 2. What happens here?
 *    - The plus (+) operator tells PHP to perform math.
 *    - PHP type juggles the string "9.99" into a float (9.99).
 *    - $tax is already an integer (2).
 *    - PHP adds float(9.99) + int(2) = float(11.99).
 *
 * 3. What data type is the result?
 *    - The result is a float (decimal number).
 *    - var_dump($output) shows: float(11.99)
 *    - gettype($output) returns: "double" (in PHP, float and double are the same thing).
 */

print "================================================================" . PHP_EOL;

print "================================================================" . PHP_EOL;
/*
 * Q19. Leading Numeric String (Type Juggling):
 *
 * Task:
 * 1. Create a variable named $priceText and assign "100 dollars" to it.
 * 2. Create a variable named $extraCharge and assign 20 to it.
 * 3. Try adding them together with (+) and store the result in $output.
 * 4. Print the output and check it with var_dump().
 *
 * Questions to answer:
 * • Is "100 dollars" a numeric string?
 * • What part of the string does PHP use?
 * • What happens to " dollars"?
 * • What warning or notice does PHP give?
 *
 * Concept to remember:
 * A string that starts with numbers followed by text (like "100 dollars") 
 * is called a "leading numeric string".
 */

// Write your code for Q19 here:

// ================================================================
// Answer for Q19:
// ================================================================

$priceText = "100 dollars";
$extraCharge = 20;

// Corrected $price to $priceText:
$output = $priceText + $extraCharge;

echo ($output) . PHP_EOL;
var_dump($output);
var_dump(gettype($output));
var_dump(is_numeric($priceText));

/*
 * EXPLANATION (TYPE JUGGLING):
 *
 * 
 * 1. What happens here?
 *    - The (+) sign triggers math.
 *    - PHP extracts the leading number 100 from "100 dollars".
 *    - PHP ignores/discards the text " dollars".
 *    - PHP throws a Warning: "A non-numeric value encountered".
 *    - 100 + 20 = 120.
 *
 * 2. Answers to Questions:
 *    • Is "100 dollars" a numeric string?
 *      No (is_numeric() returns false because it contains letters).
 *    • What part does PHP use?
 *      Only the leading number: 100.
 *    • What happens to " dollars"?
 *      It gets dropped, but PHP triggers a warning notice.
 *    • Data Type & Value:
 *      int(120).
 */


print "================================================================" . PHP_EOL;
/*
 * Q20. Non-Numeric String (Type Juggling vs Fatal Error):
 *
 * Task:
 * 1. Create a variable named $priceText and assign "one hundred" to it.
 * 2. Create a variable named $extraCharge and assign 20 to it.
 * 3. Try adding them together using the plus (+) operator: $priceText + $extraCharge.
 * 4. Run the code and observe what happens in your terminal.
 *
 * Questions to answer in comments:
 * • Is "one hundred" a numeric string? Check with is_numeric().
 * • Can PHP extract any numbers from "one hundred"?
 * • What error or result does PHP give?
 * • Why can't PHP perform this arithmetic operation?
 *
 * Concept to remember:
 * - "100"         -> Pure Numeric String (Converts cleanly to 100)
 * - "100 dollars" -> Leading Numeric String (Extracts 100 with a Warning)
 *   That's correct for numeric arithmetic, which is what we were studying.
 *   But don't generalize that to every PHP operation. The behavior depends on the context.
 *
 *   That's exactly why the book is teaching:
 *
 *    numeric context
 *    string context
 *   comparative context
 *    logical context
 *    function context
 *    bitwise context
 * - "one hundred" -> Non-Numeric String (Contains zero numbers at the start)
 *
 * Note: In modern PHP (PHP 8+), adding a non-numeric string throws a 
 * "Fatal error: Uncaught TypeError: Unsupported operand types: string + int".
 */

// Write your code for Q20 here:
// ================================================================
// Answer for Q20:
// ================================================================

//$priceText = "One Hundred"; // Non-numeric string (words, not digits)
//$extraCharge = 20;

// In PHP 8+, the line below throws a Fatal Error (TypeError).
// In PHP 7, it throws a Warning and treats the string as 0.
//$output = $priceText + $extraCharge;

//echo ($output) . PHP_EOL;

// Check if the original string is numeric:
//var_dump(is_numeric($priceText)); // bool(false)

/*
 * EXPLANATION (TYPE JUGGLING):
 *
 * 1. Why does PHP fail or throw an error?
 *    - The (+) operator asks PHP to do math.
 *    - PHP looks at "One Hundred" and finds no numeric digits at all.
 *    - Because it cannot find any numbers to convert, PHP cannot do math 
 *      with English words.
 *
 * 2. Error in PHP 8+:
 *    Fatal error: Uncaught TypeError: Unsupported operand types: string + int
 *
 * 3. String Type Summary:
 *    • "100"         -> Pure Numeric String (Converts cleanly to 100)
 *    • "100 dollars" -> Leading Numeric String (Uses 100, throws Warning)
 *    • "One Hundred" -> Non-Numeric String (Cannot convert, throws Error)
 */

print "================================================================" . PHP_EOL;

print "================================================================" . PHP_EOL;
/*
 * Q21. String Comparison (Lexicographical / ASCII Order):
 *
 * Task:
 * 1. Predict what each line will output (true or false) BEFORE running:
 *      var_dump("abc" < "acb");
 *      var_dump("a" > "B");
 * 2. Run the code and check the actual output.
 * 3. Write short comments explaining why PHP produced those results.
 *
 * Questions to answer in comments:
 * • Why is "abc" less than (<) "acb"?
 * • Why is lowercase "a" greater than (>) uppercase "B"?
 * • What table / character codes does PHP use behind the scenes to compare characters?
 *
 * Concept to remember:
 * - PHP compares strings character-by-character from left to right.
 * - Each character has a numerical ASCII code (e.g., 'a' = 97, 'b' = 98, 'B' = 66).
 * - Lowercase letters (a-z: 97-122) have HIGHER ASCII values than uppercase letters (A-Z: 65-90).
 */

// Write your code for Q21 here:
// ================================================================
// Answer for Q21:
// ================================================================

var_dump("abc" < "acb"); // bool(true)
var_dump("a" > "B");     // bool(true)

/*
 * EXPLANATION (ASCII / STRING COMPARISON):
 *
 * 1. Why is "abc" < "acb" TRUE?
 *    - PHP compares character by character from left to right:
 *      1st character: 'a' vs 'a' -> Equal, moves to next character.
 *      2nd character: 'b' vs 'c' -> 'b' (ASCII 98) is smaller than 'c' (ASCII 99).
 *    - Since 'b' < 'c', PHP stops and returns true.
 *
 * 2. Why is "a" > "B" TRUE?
 *    - In the computer's ASCII code table:
 *      • Lowercase 'a' = 97
 *      • Uppercase 'B' = 66
 *    - Since 97 > 66, lowercase 'a' is greater than uppercase 'B'.
 *
 * 3. Golden Rule for String Comparisons:
 *    • All lowercase letters (a-z: 97 to 122) are GREATER than all 
 *      uppercase letters (A-Z: 65 to 90).
 */

print "================================================================" . PHP_EOL;

print "================================================================" . PHP_EOL;
/*
 * Q22. Numeric String vs Leading Numeric String:
 *
 * Task:
 * 1. Create a variable named $firstValue and assign "25" to it.
 * 2. Create a variable named $secondValue and assign "25 dollars" to it.
 * 3. Use is_numeric() and var_dump() on both variables to check their results.
 * 4. Write short comments explaining why one returns true and the other returns false.
 *
 * Questions to answer in comments:
 * • What does is_numeric($firstValue) return and why?
 * • What does is_numeric($secondValue) return and why?
 * • What is the exact difference between a "Numeric String" and a "Leading Numeric String"?
 *
 * Concept to remember:
 * - Pure Numeric String: Contains ONLY numbers (digits, optional signs, decimals).
 *   -> is_numeric() returns TRUE.
 * - Leading Numeric String: Starts with numbers, but also contains letters/text.
 *   -> is_numeric() returns FALSE.
 */

// Write your code for Q22 here:

// ================================================================
// Answer for Q22:
// ================================================================

$firstValue = "25";
$secondValue = "25 dollars";

var_dump(is_numeric($firstValue));  // bool(true)
var_dump(is_numeric($secondValue)); // bool(false)

/*
 * EXPLANATION:
 *
 * 1. Terminal Output:
 *    bool(true)
 *    bool(false)
 *
 * 2. Why is $firstValue ("25") Numeric?
 *    - It contains ONLY numbers (digits).
 *    - is_numeric("25") returns true.
 *
 * 3. Why is $secondValue ("25 dollars") NOT Numeric?
 *    - It contains letters ("dollars") along with numbers.
 *    - is_numeric("25 dollars") returns false.
 *
 * 4. Key Difference:
 *    • Numeric String ("25"):
 *      Contains pure numbers only. PHP treats it as a 100% valid number.
 *
 *    • Leading Numeric String ("25 dollars"):
 *      Starts with digits but has words attached. PHP does NOT consider 
 *      it numeric (is_numeric() is false), but in math operations, 
 *      it will try to extract the 25 while giving a warning.
 */

print "================================================================" . PHP_EOL;
/*
 * Q23. String Comparison With Numbers:
 *
 * Task:
 * 1. Predict the output (true or false) BEFORE running:
 *      var_dump("15" < 20);
 *      var_dump("15 dollars" < 20);
 * 2. Run the code and observe the results.
 * 3. Write short comments explaining how PHP compares each one.
 *
 * Questions to answer in comments:
 * • Why does "15" < 20 compare as numbers?
 * • How does PHP handle "15 dollars" < 20?
 * • Why do pure numeric strings and text strings behave differently in comparisons?
 *
 * Concept to remember:
 * - Pure Numeric String vs Number ("15" vs 20):
 *   PHP converts the string to a number and does a numerical math comparison (15 < 20).
 * - Non-Numeric / Leading String vs Number ("15 dollars" vs 20):
 *   In modern PHP (PHP 8+), if a string is not a pure number, PHP converts the 
 *   number 20 into a string ("20") and performs an alphabetical/string comparison!
 */

// Write your code for Q23 here:

// ================================================================
// Answer for Q23:
// ================================================================

var_dump("15" < 20);         // bool(true)
var_dump("15 dollars" < 20); // bool(true)

/*
 * EXPLANATION (NUMBER VS STRING COMPARISON):
 *
 * 1. Terminal Output:
 *    bool(true)
 *    bool(true)
 *
 * 2. Why is ("15" < 20) TRUE?
 *    - "15" is a pure numeric string.
 *    - PHP converts "15" into the integer 15 (Numeric Comparison).
 *    - Math check: 15 < 20 is TRUE.
 *
 * 3. Why is ("15 dollars" < 20) TRUE?
 *    - "15 dollars" contains text, so it is NOT a pure number.
 *    - In modern PHP (PHP 8+), PHP converts 20 into a string ("20") 
 *      and compares them as text from left to right:
 *      • 1st character: '1' in "15 dollars" vs '2' in "20".
 *      • Since '1' comes before '2' ('1' < '2'), the result is TRUE.
 *
 * 4. Summary:
 *    • Pure Numeric String vs Number -> Compared as Numbers (15 < 20).
 *    • Non-Numeric String vs Number  -> Compared as Text ("15 dollars" < "20").
 */

print "================================================================" . PHP_EOL;

print "================================================================" . PHP_EOL;
/*
 * Q24. Loose Comparison (==, !=) vs Strict Comparison (===, !==):
 *
 * Task:
 * 1. Create a variable named $numericString and assign "10" (string) to it.
 * 2. Create a variable named $number and assign 10 (integer) to it.
 * 3. Test all four comparisons using var_dump():
 *      var_dump($numericString ==$number);
 *      var_dump($numericString ===$number);
 *      var_dump($numericString !=$number);
 *      var_dump($numericString !==$number);
 * 4. Run the code and observe which are true and which are false.
 *
 * Questions to answer in comments:
 * • What does each comparison return (true/false)?
 * • In which comparisons did Type Juggling occur?
 * • In which comparisons was Type Juggling prevented?
 *
 * Concept to remember:
 * - Loose Equality (== and !=): 
 *   Checks ONLY the VALUE. Converts types automatically (Type Juggling occurs).
 * - Strict Equality (=== and !==): 
 *   Checks BOTH the VALUE and the DATA TYPE. No type conversion occurs.
 */

// Write your code for Q24 here

// ================================================================
// Answer for Q24:
// ================================================================

$numericString = "10";
$number = 10;

var_dump($numericString == $number);  // bool(true)
var_dump($numericString === $number); // bool(false)
var_dump($numericString != $number);  // bool(false)
var_dump($numericString !== $number); // bool(true)

/*
 * EXPLANATION (LOOSE VS STRICT COMPARISON):
 *
 * 1. Terminal Output:
 *    bool(true)
 *    bool(false)
 *    bool(false)
 *    bool(true)
 *
 * 2. Breakdown of Type Juggling for each:
 *
 *    • ($numericString == $number) -> bool(true)
 *      Loose Equal: Checks ONLY value. 
 *      Type juggling OCCURS ("10" converts to 10). 10 == 10 is TRUE.
 *
 *    • ($numericString === $number) -> bool(false)
 *      Strict Equal: Checks BOTH value and data type.
 *      NO type juggling. String does not match Integer, so it is FALSE.
 *
 *    • ($numericString != $number) -> bool(false)
 *      Loose Not Equal: Checks ONLY value.
 *      Type juggling OCCURS ("10" converts to 10). They are equal, so != is FALSE.
 *
 *    • ($numericString !== $number) -> bool(true)
 *      Strict Not Equal: Checks value and data type.
 *      NO type juggling. Types are different (string vs int), so !== is TRUE.
 *
 * 3. Quick Rule:
 *    • 2 symbols (==, !=)   -> Allows Type Juggling (checks value only).
 *    • 3 symbols (===, !==) -> Blocks Type Juggling (checks value AND type).
 */

print "================================================================" . PHP_EOL;
/*
 * ================================================================
 * WHAT IS TYPE JUGGLING IN PHP?
 * ================================================================
 *
 * 1. Simple Definition:
 *    Type Juggling is PHP's feature where it AUTOMATICALLY converts 
 *    a variable from one data type to another behind the scenes, 
 *    depending on how you use it.
 *
 * 2. Why does it happen?
 *    PHP is a "loosely typed" language. You do not have to define 
 *    data types (like int or string) manually. When PHP sees an 
 *    operation, it "juggles" (swaps) the data type to make the 
 *    code work.
 *
 * ================================================================
 * 3 COMMON EXAMPLES OF TYPE JUGGLING:
 * ================================================================
 *
 * Example A: Math Operations (+, -, *, /)
 * ---------------------------------------
 * The math operator forces strings into numbers:
 * 
 *    $result = "10" + 5;   // Result: int(15)
 *    // PHP juggles string "10" -> integer 10, then does math.
 *
 *
 * Example B: String Joining (.)
 * -----------------------------
 * The dot (.) operator forces numbers into strings:
 * 
 *    $result = 25 . " years old"; // Result: string "25 years old"
 *    // PHP juggles integer 25 -> string "25", then joins them.
 *
 *
 * Example C: Loose Comparison (==)
 * --------------------------------
 * Double equals (==) juggles types to compare just the value:
 * 
 *    var_dump("100" == 100); // Result: bool(true)
 *    // PHP juggles "100" to number 100 before checking.
 *
 * ================================================================
 * SUMMARY TABLE:
 * ================================================================
 * • "5" + 2      --> 7      (String juggled to Integer)
 * • "5.5" + 2    --> 7.5    (String juggled to Float)
 * • true + 5     --> 6      (Boolean true juggled to Integer 1)
 * • false + 5    --> 5      (Boolean false juggled to Integer 0)
 * • 10 . " coins"--> "10 coins" (Integer juggled to String)
 * ================================================================
 */

print "================================================================" . PHP_EOL;
/*
 * Q25. Explicit Type Casting (Float to String):
 *
 * Task:
 * 1. Create a variable named $price and assign 99.99 (float) to it.
 * 2. Create a second variable named $priceString by explicitly casting $price to a string using (string).
 * 3. Use var_dump() on both variables ($price and $priceString).
 * 4. Run the code and observe the difference in data types.
 *
 * Questions to answer in comments:
 * • What does var_dump($price) display?
 * • What does var_dump($priceString) display?
 * • What is the difference between Type Juggling (automatic) and Type Casting (manual)?
 *
 * Concept to remember:
 * - Explicit Type Casting: You (the programmer) manually force the type using:
 *     (string)$variable  --> converts to string
 *     (int)$variable     --> converts to integer
 *     (float)$variable   --> converts to float
 *     (bool)$variable    --> converts to boolean
 */

// Write your code for Q25 here:

$price = 99.999;
$priceString = (string)$price;

var_dump($price);
var_dump($priceString);



// ================================================================
// Answer for Q25:
// ================================================================

$price = 99.99;
$priceString = (string)$price;

var_dump($price);       // float(99.99)
var_dump($priceString); // string(5) "99.99"

/*
 * EXPLANATION (EXPLICIT TYPE CASTING):
 *
 * 1. Terminal Output:
 *    float(99.99)
 *    string(5) "99.99"
 *
 * 2. What is the difference?
 *    • $price:
 *      Stored as a number (float). You can perform mathematical 
 *      calculations with it directly.
 *
 *    • $priceString:
 *      Stored as characters/text (string). It is enclosed in quotes 
 *      and treated as a piece of text.
 *
 * 3. Type Juggling vs Type Casting:
 *    • Type Juggling: PHP converts types AUTOMATICALLY behind the scenes.
 *    • Type Casting:  YOU manually force the type using (string), (int), etc.
 */

print "================================================================" . PHP_EOL;
/*
 * Q26. Price Calculator with User Input:
 *
 * Task:
 * 1. Ask the user to type a price using readline():
 *      $priceInput = readline("Enter a price: ");
 *
 * 2. Check if the input is a valid number using is_numeric().
 *
 * 3. IF it is numeric:
 *      - Convert it to float using (float).
 *      - Calculate 18% tax and add it to the price.
 *      - Print the final price.
 *
 * 4. ELSE (if user enters words like "100 dollars"):
 *      - Show a simple error message like: "Invalid input! Please enter numbers only."
 *
 * Concept to remember:
 * - readline() always returns a string.
 * - is_numeric() returns true for "100" or "99.50".
 * - is_numeric() returns false for "100 dollars" or "abc".
 */

// Write your code for Q26 here:

$priceInput = readline("Enter a Price: ") . PHP_EOL;

if (is_numeric($priceInput)) {
     //1. Convert text to decimal number (float)
     $priceFloat = (float)$priceInput;

     //2. Calculate 18% Tax
     $tax = $priceFloat * 0.18;
     $finalPrice = $priceFloat + $tax;

     //3. Print the final price
     echo "=========================================" . PHP_EOL;
     echo "Orignal Price: " . $priceInput . PHP_EOL;
     echo "18% Tax: " . $tax . PHP_EOL;
     echo "Final Price: " . $finalPrice . PHP_EOL;
} else {

     echo "Error: Invalid input! Please enter numbers only (e.g. 100 or 99.50)" . PHP_EOL;
}




print "================================================================" . PHP_EOL;
/*
 * Q27. 🔥 Challenge — Student Result:
 *
 * Task:
 * 1. Ask the user for student name using readline():
 *      $studentName = readline("Enter student name: ");
 *
 * 2. Ask the user for marks using readline():
 *      $marksInput = readline("Enter marks: ");
 *
 * 3. Check if $marksInput is a number using is_numeric().
 *
 * 4. IF it is NOT numeric:
 *      - Print an error: "Error: Marks must be a valid number!"
 *
 * 5. ELSE (if it is a valid number):
 *      - Convert the marks to an integer using (int)$marksInput.
 *      - Print the student name and marks.
 *      - Check if marks are 40 or more ($marks >= 40).
 *      - If marks >= 40, print "Result: Pass".
 *      - Otherwise, print "Result: Fail".
 *
 * Example Output:
 * -----------------------------
 * Enter student name: Rohit
 * Enter marks: 75
 * Student: Rohit
 * Marks: 75
 * Result: Pass
 */

// Write your code for Q27 here:

     $studentName = readline("Enter Student Name:") . PHP_EOL;
     $marksInput = readline("Enter Marks:") . PHP_EOL;

     if (is_numeric($marksInput)){
          //1. Convert text to integer (number) using single = 
          $marks = (int)$marksInput;

          echo"==================================" . PHP_EOL;
          echo "Student Name: " . $studentName . PHP_EOL;
          echo "Marks: " . $marks . PHP_EOL;

          // 2. Check Pass or Fail 
          if ($marks >= 40){
               echo "Result: " . "Pass" . PHP_EOL;
               }else{
                    echo "Result: " . "Fail" . PHP_EOL;
                    
               };

     }
      else {
          // 3. Show error if not valid number
          echo ("Error: Marks must be valid number!") . PHP_EOL;
      }





print "================================================================" . PHP_EOL;
/*
 * Q28. Movie Ticket Calculator:
 *
 * Task:
 * 1. Ask the user to enter their age using readline():
 *      $ageInput = readline("Enter your age: ");
 *
 * 2. Ask the user to enter the ticket price using readline():
 *      $priceInput = readline("Enter ticket price: ");
 *
 * 3. Validate that BOTH inputs are numeric using is_numeric().
 *
 * 4. IF both inputs are numeric:
 *      - Convert age to integer: (int)$ageInput
 *      - Convert price to float: (float)$priceInput
 *      - Check the discount rules using if / elseif / else:
 *          • Age < 13            --> 50% discount ($price * 0.50)
 *          • Age between 13 & 59 --> No discount  (0)
 *          • Age >= 60           --> 30% discount ($price * 0.30)
 *      - Calculate final price: Final Price = Original Price - Discount
 *      - Display:
 *          • Original Ticket Price
 *          • Discount Amount
 *          • Final Ticket Price
 *
 * 5. ELSE (if any input contains text or is invalid):
 *      - Display an error: "Error: Age and price must be valid numbers!"
 *
 * ---------------------------------------------------------------
 * Example Output:
 * ---------------------------------------------------------------
 * Enter your age: 10
 * Enter ticket price: 200
 * ==================================
 * Original Price : 200
 * Discount (50%) : 100
 * Final Price    : 100
 */

// ================================================================
// Write your code for Q28 here:
// ================================================================

// ================================================================
// Answer for Q28: Movie Ticket Calculator
// ================================================================

$ageInput = readline("Enter your age: ");
$priceInput = readline("Enter ticket price: ");

// 1. Check if both inputs are valid numbers
if (is_numeric($ageInput) && is_numeric($priceInput)) {
     // 2. Convert text to numbers
     $age = (int)$ageInput;
     $price = (float)$priceInput;

     // 3. Determine discount based on age
     if ($age < 13) {
          $discountRate = 50;
          $discountAmount = $price * 0.50;
     } elseif ($age >= 60) {
          $discountRate = 30;
          $discountAmount = $price * 0.30;
     } else {
          $discountRate = 0;
          $discountAmount = 0;
     }

     // 4. Calculate final price
     $finalPrice = $price - $discountAmount;

     // 5. Display the results
     echo "==================================" . PHP_EOL;
     echo "Original Ticket Price : " . $price . PHP_EOL;
     echo "Discount (" . $discountRate . "%)     : " . $discountAmount . PHP_EOL;
     echo "Final Ticket Price    : " . $finalPrice . PHP_EOL;
} else {
     // 6. Show error if user typed words or invalid characters
     echo "Error: Both age and ticket price must be valid numbers!" . PHP_EOL;
}

/*
 * EXPLANATION (SIMPLE WORDS):
 *
 * 1. is_numeric($ageInput) && is_numeric($priceInput)
 *    - Uses AND (&&) to make sure BOTH inputs are valid numbers.
 *
 * 2. Type Casting:
 *    - $age = (int)$ageInput;       --> changes age string to a whole number.
 *    - $price = (float)$priceInput; --> changes price string to a decimal number.
 *
 * 3. Discount Conditions:
 *    - if ($age < 13): 50% discount ($price * 0.50).
 *    - elseif ($age >= 60): 30% discount ($price * 0.30).
 *    - else: No discount (0).
 *
 * 4. Final Math:
 *    - $finalPrice = $price - $discountAmount
 */

print "================================================================" . PHP_EOL;