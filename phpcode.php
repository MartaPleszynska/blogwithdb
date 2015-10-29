<?php
	//This is a PHP single-line comment
	/* This is a PHP
	multiple-lines comment
 */
$variable = “something”;
/* variable always starts with the $ sign and it can follow by underscore(_)
or letter but not a number;
variable name can consist with series of letters, underscores and numbers
and it is case sensetive
*/

echo “This will output data on the screen”;
print “This will also output data on the screen”;

const value = “This variable does not change”;

if ( condition1)
{
	echo “True”;	// code executed if condition1 is true
}
elseif (condition2)
{
	echo “Condition one is false but condition two is true”; // code to execute is condition1 is false
}
else
{
	echo “False”;	// code executed if condition one and two are false
}

switch (case_id)
{
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

while (condition is true)
{
	// execute this code
}

do
{
	// some code to be executed
} while (condition is true);


?>
