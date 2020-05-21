<?php
// while
$i = 1;
while ($i < 4) {
    echo $i . " ";
    $i++;
}


// do ... while
echo "with while: ";
$i = 1;
while ($i < 0) {
    echo $i . " ";
    $i++;
}
echo "with do-while: ";
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i < 0);

// for loop

for ($i = 1; $i < 10; $i++) {
echo $i . " ";
}

$names = ['Harry', 'Ron', 'Hermione'];
for ($i = 0; $i < count($names); $i++) {
echo $names[$i] . " ";
}


// foreach 

$names = ['Harry', 'Ron', 'Hermione'];
foreach ($names as $name) {
    echo $name . " ";
}
foreach ($names as $key => $name) {
    echo $key . " -> " . $name . " ";
}