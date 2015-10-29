<?php


$postno = "2015-10-27";
$myposttitle = "PHP notes";
$mypostauthor = "Marta Pleszynska";
$mypostdate = "Oct 27, 2015";
$mypostcontent = " ?>

<p>
PHP stands for Hypertext Preprocessor. It a widely used, open source scripting language. PHP is executed on a server and can generate dynamic page content. PHP file can contain etxt and PHP Code as well a HTML, CSS and JavaScript. It runs on various platforms.
</p>

Basic syntax:
<?php
	//This is a PHP single-line comment
	/* This is a PHP
	multiple-lines comment
 */
$variable = “something”; // variable starts with the $ sign
echo “This will output data on the screen”;
print “This will also output data on the screen”;
const value = “This variable does not change”;
if ( condition1) {
	echo “True”;	// code executed if condition1 is true
}
elseif (condition2) {
	echo “Condition one is false but condition two is true”; // code to execute is condition1 is false
}
else {
	echo “False”;	// code executed if condition one and two are false
}

switch (case_id) {
	case label_1:
		// code to be executed if case_id is label_1;
		break;
	case label_2:
		// code to be executed if case_id is label_2;
		break;
	case label_3:
		// code to be executed if case_id is label_3;
		break;
	…
default:
	// code to be executed if the case_id does not match any labels;
}

while (condition is true) {
	// execute this code
}

do {
	// some code to be executed
} while (condition is true);


?>

“In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.” (w3schools)


Variable Scope:
local - declared inside a function
global - declared outside of function
static - local variable that is not deleted and kept for further ‘jobs’; can be called without creating an instance

Difference between ‘echo’ and ‘print’:
‘echo’ does not return any value and it cannot be used in expressions but it can take multiple parameters;
‘print’ does return 1 and it can be used in expressions but can only take one argument;

Data types: string, integer, float, boolean, array, object, NULL, resource
Variable of type  NULL is a variable that has no assigned value to it.
Reference type is the storing reference of functions and resources external to PHP (data call)

String functions:
strlen(“string)”; - returns length of a string
str_word_count(); - counts the number of words;
strrev(); - returns reverse string;
substr(); returns a piece of a string;
strpos(“where(haystack)”, “what(needle)“); - returns a position of a character of the first match;
str_replace(“what”, “with what”, “where”); - replaces some characters with other characters;
strtoupper(); - changes string to all uppercase letters;
strtolower(); - changes the string to all lower case letters

Constant is a variable that does not change and it can be defined in two ways:
const name = value;
	const message_one = “This variable does not change”;
or
define (name, value, case-sensitive);
	define (“message_two”, “This variable also does not change and is case sensitive”);
	define (“message_three”, “This variable also does not change but is not case sensitive”, true);

Operators:
Arithmetic: + , - , * , / , % , **
Assignment: = , += , -= , *= , /= , %=
Comparison: equal == , identical === , not equal != or <> , not identical !== , > , >= , < , <=
Increment/decrement:
pre-increment/decrement: ++$a/--$a - increments $a by one and then returns $a
post-increment/decrement: $b++/$b-- - returns $b and then increments it by one
Logical: and && , or || , not ! , xor (true if either side is true but not both)
String: . concatenation , .= concatenation assignment
Array:
+ (union),
== (equality - returns true if have the same key/value pairs),
=== (identity - returns true if have the same key/value pairs in the same order and of the same types),
!= (inequality - return true if not equal) or <>
!== (non-identity - returns true if not identical)
Loops:
‘while’ - will check condition before executing the code where ‘do.. while’ loop will execute code once and then check condition.



http://www.w3schools.com/php/php_intro.asp


<?php
";
?>
