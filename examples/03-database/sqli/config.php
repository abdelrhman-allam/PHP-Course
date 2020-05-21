<?php

$host = "localhost:3036";
$db = "iti";
$user = "web";
$password = "K7rOyDZ2K7vqNte3";


   
   $conn = mysql_connect($host, $user, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_close($conn);
