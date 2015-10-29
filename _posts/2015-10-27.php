<?php


$postno = "2015-10-27";
$myposttitle = "PHP notes";
$mypostauthor = "Marta Pleszynska";
$mypostdate = "Oct 27, 2015";
$mypostcontent = " ?>

<p>
PHP stands for Hypertext Preprocessor. It a widely used, open source scripting language. PHP is executed on a server and can generate dynamic page content. PHP file can contain etxt and PHP Code as well a HTML, CSS and JavaScript. It runs on various platforms.
</p>

<p>
Basic syntax:
</p>
<img class="halfsize"src = "img/phpcode.png" alt ="php code">

<p>
“In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.” <a href="http:\/\/www.w3schools.com/php/">(w3schools)</a><br>
PHP statement si anything that is an executable line and it ends with semicolon (;)<br>
White spaces (spaces, tabs, blank lines) do not matter to PHP interpreter, it ignores it completely but using white space properly improves readability of the code.
</p>

<ul class="list">Variable Scope:
<li>local - declared inside a function</li>
<li>global - declared outside of function</li>
<li>static - local variable that is not deleted and kept for further ‘jobs’; can be called without creating an instance</li>
</ul>

<ul class="list">Difference between ‘echo’ and ‘print’:
<li><code>echo</code>does not return any value and it cannot be used in expressions but it can take multiple parameters;</li>
<li><code>print</code>does return 1 and it can be used in expressions but can only take one argument;</li>
</ul>

<p>
Data types: string, integer, float, boolean, array, object, NULL, resource<br>
Variable of type  NULL is a variable that has no assigned value to it.<br>
Reference type is the storing reference of functions and resources external to PHP (data call)<br>
</p>

<ul class="list">String functions:
<li><code>strlen(“string)”;</code> - returns length of a string</li>
<li><code>str_word_count();</code> - counts the number of words;</li>
<li><code>strrev();</code> - returns reverse string;</li>
<li><code>substr();</code> - returns a piece of a string;</li>
<li><code>strpos(“where(haystack)”, “what(needle)“);</code> - returns a position of a character of the first match;</li>
<li><code>str_replace(“what”, “with what”, “where”);</code> - replaces some characters with other characters;</li>
<li><code>strtoupper();</code> - changes string to all uppercase letters;</li>
<li><code>strtolower();</code> - changes the string to all lower case letters</li>
</ul>
<p>
Constant is a variable that does not change and it can be defined in two ways:<br>
<code>const name = value;<br>
const message_one = “This variable does not change”;<br>
</code>
or<br>
<code>
define (name, value, case-sensitive);<br>
define (“message_two”, “This variable also does not change and is case sensitive”);<br>
define (“message_three”, “This variable also does not change but is not case sensitive”, true);<br>
</code>
</p>
<ul class="list">Operators:
<li>Arithmetic:<code> + , - , * , / , % , **</code></li>
<li>Assignment:<code> = , += , -= , *= , /= , %=</code></li>
<li>Comparison: equal<code>==</code>, identical <code>===</code> , not equal <code>!=</code> or <code><></code>, not identical <code> !== , > , >= , < , <=</code></li>
<li><ul class="list">
Increment/decrement:
<li>
pre-increment/decrement: <code>++$a/--$a</code> - increments $a by one and then returns $a</li>
post-increment/decrement: <code>$b++/$b--</code> - returns $b and then increments it by one</li>
</ul>
</li>
<li>Logical: <code>and && , or || , not ! , xor (true if either side is true but not both)</code></li>
<li>String:<code> . </code>concatenation , <code>.= </code>concatenation assignment</li>
<li><code></code></li>
<li><ul class="list">Array:
<li><code>+</code> (union),</li>
<li><code>==</code> (equality - returns true if have the same key/value pairs),</li>
<li><code>===</code> (identity - returns true if have the same key/value pairs in the same order and of the same types),</li>
<li><code>!=</code> (inequality - return true if not equal) or <></li>
<li><code>!==</code> (non-identity - returns true if not identical)</li>
</ul>
</li>
</ul>







Loops:
‘while’ - will check condition before executing the code where ‘do.. while’ loop will execute code once and then check condition.



http://www.w3schools.com/php/php_intro.asp


<?php
";
?>
