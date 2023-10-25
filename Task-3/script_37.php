<!DOCTYPE html>
<html>
<body>

<?php 
    
// Declaring an array 
$arr = array(); 
  
// Adding the first element 
array_push($arr, 1, 2, 3, 4, 5); 
  
print_r("Array after multiple insertions </br>"); 
print_r($arr); 
array_pop($arr); 
  
// Single array pop 
print_r("Array after a single pop </br>"); 
print_r($arr); 
  
?>

</body>
</html>