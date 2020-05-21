<?php
$stmt = $db->prepare("INSERT INTO table(field1,field2,field3,field4,field5) VALUES(:field1,:field2,:field3,:field4,:field5)");
$stmt->execute(array(':field1' => $field1, ':field2' => $field2, ':field3' => $field3, ':field4' => $field4, ':field5' => $field5));
$affected_rows = $stmt->rowCount();