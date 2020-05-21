<?php
include "config.php";

   $conn = mysql_connect($host, $user, $password);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   mysql_select_db('iti');

   $sql = 'INSERT INTO students '.
   '(id, name) '.
   'VALUES (null, "Abdelrahman")';
   
      
   
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);


   