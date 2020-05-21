<?php

   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not delete database db_test: ' . mysql_error());
   }
   
   echo "Database deleted successfully\n";
   
   mysql_close($conn);