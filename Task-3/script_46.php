<!DOCTYPE html>
<html>
<body>

<?php
//declare empty array
$A = [];
//fill up the empty array
$A = array_fill(2,5,"Y");
//using print_r() to see the details of the array
print_r($A);

// fill up the array $fillable with lemon
$fillable = array_fill(6,4,'lemon');
//first index of returned array will be negative
$arrayVal = array_fill(-4, 4, 'pear');

//print the output to the screen
print_r($fillable);
print_r($arrayVal);
?>

</body>
</html>