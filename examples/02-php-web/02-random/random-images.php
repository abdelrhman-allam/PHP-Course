<html>
   <body>
   
      <?php
         // seed random number generator with unixtime
         srand( microtime() * 1000000 );
         // random number between 1 and 4
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "images/image_1.jpeg";
               break;
            
            case 2: $image_file = "images/image_2.jpeg";
               break;
            
            case 3: $image_file = "images/image_3.jpeg";
               break;
            
            case 4: $image_file = "images/image_4.jpeg";
               break;
         }
         echo "Random Image : <img src=$image_file />";
      ?>
      
   </body>
</html>