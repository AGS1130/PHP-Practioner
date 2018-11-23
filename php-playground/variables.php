<?php
// Using HTML breakline creates a new line
$test = 'This is a variable<br>';
echo $test;

$greeting = 'Hello there!<br>';
echo $greeting;

// You can concatenate the breakline too
$name = 'Don Juan';
echo 'Hello, ' . $name . '<br>';

$inlineVariable = "of a variable used in a string with curly brackets<br>";
echo "This is an example, {$inlineVariable}";

// You can also create a new line with \r or \n, but the string has to be double quoted
$inlineVariable_2 = "this time with the echoed variable not containing curly brackets";
echo "This is an example of variable being echoed, $inlineVariable_2\r\n";

// Or you can cheat with a concatenation of a double quoted string with the escaped characters
$escapedCharacterString = "\r\nAnd this is a double quoted string.<br>";
echo "This is a single quoted string." . $escapedCharacterString;

// PHP Quirk: Variable Variable
$wannaSeeSomethingCrazy = 'This will actually print when using double $ or Variable Variable.';
$thisCanBeAccessed = 'wannaSeeSomethingCrazy';

echo $$thisCanBeAccessed;

?>