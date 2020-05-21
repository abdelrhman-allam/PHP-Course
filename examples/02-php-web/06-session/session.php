<?php

    session_start();

    

$msg = "You have visited this page ";
$msg .="<span style='color:red' >" .  $_SESSION['counter'] ."</span>";
$msg .= " in this session.";


if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}
?>

<html>

<head>
    <title>Setting up a PHP session</title>
</head>

<body>
  <h1>  <?php echo ($msg); ?> </h1>
</body>

</html>