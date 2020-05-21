<?php
$text = '
How can a clam cram in a clean cream can? ';
echo strlen($text); // 45
$text = trim($text);
echo $text; // How can a clam cram in a clean cream can?
echo strtoupper($text); // HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
echo strtolower($text); // how can a clam cram in a clean cream can?
$text = str_replace('can', 'could', $text);
echo $text; // How could a clam cram in a clean cream could?
echo substr($text, 2, 6); // w coul
var_dump(strpos($text, 'can')); // false
var_dump(strpos($text, 'could')); // 4


$variable = "name";
$literally = 'My $variable will not print!\\n';

print($literally);
print "<br />";

$literally = "My $variable will print!\\n";

print($literally);

// string concatenation
$string1="Hello World";
$string2="1234";
   
echo $string1 . " " . $string2;