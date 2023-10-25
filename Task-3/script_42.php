<!DOCTYPE html>
<html>
<body>

<?php 
// PHP code to illustrate the working of array_diff() 
function Difference($array1, $array2, $array3){ 
    return(array_diff($array1, $array2, $array3)); 
} 
  
// Driver Code 
$array1 = array('a', 'b', 'c', 'd', 'e', 'f'); 
$array2 = array('a', 'b', 'g', 'h'); 
$array3 = array('a', 'f', 'i'); 
print_r(Difference($array1, $array2, $array3)); 
?>

<body>
</html> 