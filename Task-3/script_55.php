<!DOCTYPE html>
<html>
<body>

<?php
//array_key_first:=
$names = ['Andrew', 'Adam', 'Monty', 'James', 'Amanda', 'Jessica', 'Roy'];
$country_capitals = ['Canada' => 'Ottawa', 'Germany' => 'Berlin', 'United States' => 'Washington D.C.', 'China' => 'Beijing', 'India' => 'New Delhi', 'Australia' => 'Canberra'];
// Output — Andrew 
echo $names[array_key_first($names)];
// Output — Ottawa 
echo $country_capitals[array_key_first($country_capitals)];

//array_key_last:=
$names = ['Andrew', 'Adam', 'Monty', 'James', 'Amanda', 'Jessica', 'Roy'];
$country_capitals = ['Canada' => 'Ottawa', 'Germany' => 'Berlin', 'United States' => 'Washington D.C.', 'China' => 'Beijing', 'India' => 'New Delhi', 'Australia' => 'Canberra'];
// Output — Roy 
echo $names[array_key_last($names)];
// Output — Canberra 
echo $country_capitals[array_key_last($country_capitals)];
?>

</body>
</html>