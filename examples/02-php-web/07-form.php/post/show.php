<?php

$name = "anonymous";
if ($_POST['fname']) {
    $fname = $_POST['fname'];
}

if ($_POST['lname']) {
    $lname = $_POST['lname'];
}


if ($_POST['track']) {
    $track = $_POST['track'];
}

echo $fname. " " . $lname . " Track ". $track;


?>