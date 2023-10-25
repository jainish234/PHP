<!DOCTYPE html>
<html>
<body>
<?php

// Numberic array
$num_arr = array(1,2,3,1,6,1,23,2);

// Remove duplicate values
$num_unique = array_unique($num_arr);

echo "<pre>";
print_r($num_arr);
echo "</pre>";

echo "<b>After remove duplicate</b>";
echo "<pre>";
print_r($num_unique);
echo "</pre>";
?>
</body>
</html>