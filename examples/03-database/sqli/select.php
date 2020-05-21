<?php

include "config.php";

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
 }
 
 $sql = 'SELECT * FROM students';
 mysql_select_db('iti');
 $retval = mysql_query( $sql, $conn );
 
 if(! $retval ) {
    die('Could not get data: ' . mysql_error());
 }
 
 while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "ID :{$row['id']}  <br> ".
       "NAME : {$row['name']} <br> ".
       "--------------------------------<br>";
 }
 
 echo "Fetched data successfully\n";
 
 mysql_close($conn);