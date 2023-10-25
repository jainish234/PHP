<!DOCTYPE html>
<html>
<body>
<?php
$array = array(
    'month' => 'January',
    'month2' => 'February',
    'month3' => 'March'
);

$filterArray = array_filter($array, function ($var) {
    return (strpos($var, 'Jan') === false);
});

// Output the filtered array
print_r($filterArray);

?>
</body>
</html>