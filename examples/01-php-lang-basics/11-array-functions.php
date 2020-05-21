<?php
   // isset and empty
    $string = '';
    $array = [];
    $names = ['Harry', 'Ron', 'Hermione'];
    var_dump(empty($string)); // true
    var_dump(empty($array)); // true
    var_dump(empty($names)); // false
    var_dump(isset($names[2])); // true
    var_dump(isset($names[3])); // false


    // search 
    $names = ['Harry', 'Ron', 'Hermione'];
    $containsHermione = in_array('Hermione', $names);
    var_dump($containsHermione); // true
    $containsSnape = in_array('Snape', $names);
    var_dump($containsSnape); // false
    $wheresRon = array_search('Ron', $names);
    var_dump($wheresRon); // 1
    $wheresVoldemort = array_search('Voldemort', $names);
    var_dump($wheresVoldemort); // false

    // sort
    $properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
    ];
    $properties1 = $properties2 = $properties3 = $properties;
    sort($properties1);
    var_dump($properties1);
    asort($properties3);
    var_dump($properties3);
    ksort($properties2);
    var_dump($properties2);