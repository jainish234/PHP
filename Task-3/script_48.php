<!DOCTYPE html>
<html>
<body>
<?php

$numbers = [10,20,30];

$total  = array_reduce($numbers, function ($previous, $current) {
    return $previous + $current;
});

echo $total; // 60
?>
</body>
</html>