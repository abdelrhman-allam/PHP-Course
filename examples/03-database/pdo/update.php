<?php
$stmt = $db->prepare("UPDATE table SET name=? WHERE id=?");
$stmt->execute(array($name, $id));
$affected_rows = $stmt->rowCount();