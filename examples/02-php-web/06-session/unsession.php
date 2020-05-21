<?php
   session_start();
   unset($_SESSION['counter']);
   // or 

   session_destroy();

   // or 

   $_SESSION['counter'] = 0; 
   
   echo "counter: " . $_SESSION['counter'];