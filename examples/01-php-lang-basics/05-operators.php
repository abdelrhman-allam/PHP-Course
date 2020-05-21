<?php
/* Arithmetic operators */
$a = 10;
$b = 3;
var_dump($a + $b); // 13
var_dump($a - $b); // 7
var_dump($a * $b); // 30
var_dump($a / $b); // 3.333333...
var_dump($a % $b); // 1
var_dump($a ** $b); // 1000
var_dump(-$a); // -10

/* Assignment operators */ 
$a = 3 + 4 + 5 - 2;
var_dump($a); // 10
$a = 13;
$a += 14; // same as $a = $a + 14;
var_dump($a);
$a -= 2; // same as $a = $a - 2;
var_dump($a);
$a *= 4; // same as $a = $a * 4;
var_dump($a);

/* Comparsion operators */

var_dump(2< 3); // true
var_dump(3< 3); // false
var_dump(3<= 3); // true
var_dump(4<= 3); // false
var_dump(2> 3); // false
var_dump(3>= 3); // true
var_dump(3> 3); // false
var_dump(1<=> 2); // int less than 0
var_dump(1<=> 1); // 0
var_dump(3<=> 2); // int greater than 0