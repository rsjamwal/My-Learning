<?php
print "========================EASY====================================" . PHP_EOL;

//Q1. Create a PHP variable named $studentName and assign your name to it.
//Then, print the value of the variable.

$studentName = "Rohit Jamwal";
print $studentName . PHP_EOL;
print "================================================================" . PHP_EOL;

/*
Q2. Check String Type:
Create a PHP variable variable named $cityname and assign your city name to it.
Then use the gettype() function to check the type of the variable and print it.

gettype() is a builtin PHP function that returns the type of a variable.
*/

$cityName = "Jammu";
print gettype($cityName) . PHP_EOL;
print "================================================================" . PHP_EOL;

/*Q3. use var_dump()
Create a PHP variable named $courseName and assign a course name PHP to it.
Then use the var_dump() function to print the value and type of the variable.

Definition: var_dump() is a built in PHP function that displays both its datatype and value. It is useful for debugging purposes.
*/

$courseName = "PHP Programming";
var_dump($courseName);
print "================================================================" . PHP_EOL;

/*
Q4. Use var_dump() function to print below:
    $name = "PHP";
    $age = 25;
    $price = 99.50;
    $isActive = true;
    $isPresent = false;
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
Q5. Use gettype() function to print below:

    $name = "PHP";
    $age = 25;
    $price = 99.50;
    $isActive = true;
    $isPresent = false;
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
Important observation : 

We might think:
"Wait! var_dump() says FLOAT, but gettype() says DOUBLE. Does that mean the variable changed?"
No.

This is because in PHP, float and double 
are used interchangeable to represent floating-point numbers. 
The gettype() function returns double for floating-point numbers, while var_dump() displays float.
                $price = 99.50
                    |
                    v
        Floating-point number
             /          \
            /            \
    var_dump()         gettype()
        |                  |
        v                  v
   "float(99.5)"       "double"

float and double are like two different names/labels for the same thing: 
var_dump() calls it float, while gettype() calls it double; the value is still the same floating-point
numbers.
*/

/*
Q6. String Length:
Create a PHP variable named $studentName and assign your name to it.
Then use the appropriate PHP built-in function to find the Length and the number of characters in the string.
*/

$studentName = "Rohit Jamwal";
print strlen($studentName) . PHP_EOL; //strlen() is a built-in PHP function that returns the length of a string.

print "=================================================================" . PHP_EOL;

/*
Q7. Check whether a Variable is a String:
Create a PHP variable named $studentName and assign your name to it.
Use is_string() and var_dump() functions to check wthether the variable is a string or not and print the result. 
*/

$studentName = "123";
is_string($studentName); //is_string() checks whether a variable is a string and 
//returns either true or false, but it does not automatically print the result.
//But because you don't store or print that returned value, you never see it.
//So, to display the result, use var_dump() with is_string()

var_dump(is_string($studentName));
// var_dump() is a built-in PHP function that displays
// both the data type and value. It is useful for debugging purposes.

//The KEY-CONCEPT to Remember:
//is_string() → checks and returns true/false
//var_dump()  → displays the result
print "=================================================================" . PHP_EOL;

/*
Q8. Chech whether a variable is not a string:
Create a PHP variable named $countryName and assign your country name to it.
Use is_string() and var_dump() functions to check whether the variable is not a string  and print the result.
*/

//is_string() checks whether something is a string. 
//It doesn't directly check whether something is not a string.
//To check if a variable is not a string, you can use the logical NOT operator (!).
$countryName = "U.S.A";
var_dump(is_string($countryName)); //This will return true beccause $countryName is a string.
var_dump(!is_string($countryName)); //This will return false becuase $countryName is a string,
// so !is_string($countryName) is false.

print "=================================================================" . PHP_EOL;

/*
Q9.Numeric String:
Create a PHP variable named $studentAge and assign your age.
Use is_numeric() and var_dump() functions to check whether the value of the variable
is a numeric string or not and print the result.
*/
$studentAge = "40"; //This is a numeric string because it contains a numeric value 40,
//even though it is stored as a string.
var_dump(is_numeric($studentAge)); // This will return true because $studentAge is a numeric string.

/*
$studentAge = "40"
             ↓
        string (data type)
             ↓
        Contains numeric value
             ↓
        numeric string
             ↓
is_numeric() → true

$age = "40";  // numeric string
$age = "hello"; // non-numeric string
$age = 40;    // integer, NOT a string
*/
print "=================================================================" . PHP_EOL;
/* 
Q10. Check for a Non-Numeric String:

Create a PHP variable named $checkString that takes a string as an argument
and checks whether the string is non-numeric or not.

Use the is_numeric() and var_dump() functions to check whether the given
string is non-numeric.

*/

$checkString = "Hello World!"; // This is a string, but its content is not numeric, 
//so it is a non-numeric string.
var_dump(!is_numeric($checkString)); // This will return true because $checkString is a 
//non-numeric string. The logical NOT operator (!) negates the result of is_numeric().
print "=================================================================" . PHP_EOL;
/*
Q11. Empty String:

a. Create a PHP variable named $emptyString and assign an empty string to it.

Use the empty() and var_dump() functions to check whether the variable
contains an empty string and print the result.

b. Create a PHP variable named $middleName and assign an empty string to it.

Use the following functions:

- var_dump()
- is_string()
- is_numeric()

Determine what each function returns when applied to $middleName.


*/

$emptyString = ""; //This is an empty string because it contains no characters.
var_dump(empty($emptyString)); //This will return true because $emptyString is empty.
var_dump(strlen($emptyString)); //This will return 0 and its datatype is integer because $emptyString is empty and has no characters.

$middleName = ""; //This is an empty string because it contains no characters.
var_dump(is_string($middleName)); // This will return true because $middleName is a string,
//even though it is empty.

var_dump(is_numeric($middleName)); //This will return false because $middleName is a string,
//and it does not contain a numeric value.

// ""     → empty string → 0 characters
// " "    → space        → 1 character -> Non-Empty String
// "   "  → spaces       → 3 characters ->  Non-Empty String

print "=================================================================" . PHP_EOL;
print "=====================MEDIUM QUESTIONS============================" . PHP_EOL;

/*
Q12. String Concatenation:

Create two PHP variables named $firstName and $lastName and assign your
first name and last name to them, respectively.

Concatenate these two variables and create a new variable named $fullName.
Then print the full name.
*/

$firstName = "Rohit";
$lastName = "Jamwal";
$fullName = $firstName . " " . $lastName; //The dot operator (.) is the string concatenation operator in PHP 

print ($fullName) . PHP_EOL;

print "=================================================================" . PHP_EOL;

/*
Q13. String + Integer:

Create

$studentName: "Rohit" (String)
$studentAge: "20" (String)

Use String concatenation to produce:

Rohit is 20 years old.
Do not convert $studentAge manually
*/

$studentName = "Rohit";
$studentAge = "20";

$output = $studentName . " is " . $studentAge . " Years Old" . PHP_EOL;
print($output);

/*
STRING CONCATENATION — SPACING PATTERN

In PHP:
- "text"       → literal text
- $variable    → value stored in a variable
- .            → concatenates (joins) the pieces together
- " "          → one space

Example:

$studentName = "Rohit";
$studentAge = "20";

$output = $studentName . " is " . $studentAge . " Years Old";

Output:
Rohit is 20 Years Old


Why do we write " is " with TWO spaces?

" is "

   " is "
    │ │ │
    │ │ └── space
    │ └──── "is"
    └────── space

It has:
[space]is[space]

Because "is" is between two values:

Rohit[space]is[space]20


Why do we write " Years Old" with ONE space?

" Years Old"

It has:
[space]Years Old

Because it comes after $studentAge and is at the end:

20[space]Years Old


GENERAL PATTERN:

If text is between two values:
$first . " text " . $second

Example:
$name . " is " . $age


If text comes after a value and ends the sentence:
$first . " text"

Example:
$age . " Years Old"


IMPORTANT:
The dot (.) does NOT create a space.
Quotes ("") do NOT automatically create a space.

If you want a space in the output, you must type the space
inside the quotes.

For example:

$name . " " . $age

The " " contains exactly ONE space.

Remember:
Quotes → literal text
$variable → stored value
. → joins the pieces
" " → one space
*/

print "=================================================================" . PHP_EOL;
