<!DOCTYPE html>
<html>
<body>
<?php
//Declare an array in PHP
$myarray = array("Cycle", "Bike", "Car", "Bolero", "BMW", "WagonR", "Maruti");
 
//Split into chunks of 2
$myArrChunks = array_chunk($myarray, 2);
 
//Print result
print_r($myArrChunks);
?>
</body>
</html>