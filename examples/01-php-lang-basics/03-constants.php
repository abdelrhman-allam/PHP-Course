<?php
   define("DB", 50);
   define("USERNAME", "root");
   
   echo DB;
   echo constant("USERNAME"); // same thing as the previous line



    // Valid constant names
    define("ONE",     "first thing");
    define("TWO2",    "second thing");
    define("THREE_3", "third thing");

    // Invalid constant names
    define("2TWO",    "second thing");
    define("__THREE__", "third value"); 