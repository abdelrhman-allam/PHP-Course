<?php
echo "line:". __LINE__.PHP_EOL;;  //  The current line number of the file.
echo "file:" .__FILE__. PHP_EOL;  // The full path and filename of the file. If used inside an include,the name of the included file is returned.
echo __FUNCTION__. PHP_EOL;; // this constant returns the function name as it was declared (case-sensitive). 	
echo __CLASS__ . PHP_EOL;   // this constant returns the class name as it was declared (case-sensitive).
echo __METHOD__ . PHP_EOL ; // is returned as it was declared (case-sensitive).

print ("\n");