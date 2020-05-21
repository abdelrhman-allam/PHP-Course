<?php

$name = "anonymous";
if ($_POST['fname']) {
    $name = $_POST['fname'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST" action="form.php">
        <label for="fname">First Name:</label>
        <input type="text" name="fname">
        <input type="submit" name="send" />
    </form>
    <h1>Hello <?php echo $name ?></h1>
</body>

</html>