<?php

$students = [
    "eslam",
    "samah",
    "mariam",
    "merna",
    "Alaa",
];


$query = $_GET["query"];

$found = in_array($query, $students);
$data = null;
if($found){
    $index = array_search($query, $students);
    $data = $students[$index];
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="GET" action="">
        <input name="query" type="text">
        <input type="submit" value="search">
    </form>

    <?php echo $index; ?>
    <?php print_r($data); ?>
</body>

</html>