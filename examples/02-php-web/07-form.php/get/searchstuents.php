<?php

$students = [
    "eslam",
    "samah",
    "mariam",
    "merna",
    "Alaa",
];


$query = $_GET["query"];

$found = in_array($query, $students);




echo $found;