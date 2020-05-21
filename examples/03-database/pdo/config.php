<?php


$host = "localhost:3036";
$db = "iti";
$user = "web";
$password = "K7rOyDZ2K7vqNte3";


$db = new PDO('mysql:host=localhost;dbname=iti;charset=utf8mb4', 'web', 'K7rOyDZ2K7vqNte3');


foreach($db->query('SELECT * FROM students') as $row) {
    echo $row['id'].' '.$row['name']; //etc...
}