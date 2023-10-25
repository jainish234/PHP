<!DOCTYPE html>
<html>
<body>
<?php
$first = ['item1' => 'value1', 'item2' => 'value2'];
$second = ['item3' => 'value3', 'item4' => 'value4'];

$merged = array_merge($first, $second);

var_dump($merged);
?>
</body>
</html>