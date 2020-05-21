<?php

$json = file_get_contents('php://input');
echo $json;


// if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {
//     // do user authentication as per your requirements
//     // ...
//     // ...
//     // based on successful authentication

    
   
// } else {
//     echo json_encode(array('success' => 0));
// }