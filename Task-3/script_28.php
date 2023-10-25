<!DOCTYPE html>
<html>
<body>

<?php
$numbers=array(4, 6, 2, 22, 11);
sort($numbers);

foreach ($numbers as $key => $val) {
    echo "numbers[" . $key . "] = " . $val . "<br>";
}
?>

</body>
</html>
