
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST" action="show.php">
        <label for="fname">First Name:</label><input type="text" name="fname">
        <label for="lname">Last Name:</label><input type="text" name="lname">
        <label for="track">Track:</label><input type="text" name="track">
        <input type="submit" name="send" />
    </form>
    <h1>Hello <?php echo $name ?></h1>
</body>

</html>