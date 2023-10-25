<!DOCTYPE html>
<html>
<body>

<?php
$cities = array("France"=>"Paris", "India"=>"Mumbai", "UK"=>"London", "USA"=>"New York");
 
// Loop through cities array
foreach($cities as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>

</body>
</html>