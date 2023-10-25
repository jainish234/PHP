<!DOCTYPE html>
<html>
<body>
<?php
// Array representing a possible record set returned from a database
$products = array(
    array(
        'id' => 5,
        'price' => 5167,
        'name' => 'watch',
    ),
    array(
        'id' => 6,
        'price' => 349,
        'name' => 'chairs',
    ),
    array(
        'id' => 7,
        'price' => '788',
        'name' => 'peanut',
    ),
    array(
        'id' => 8,
        'price' => 348,
        'name' => 'snacks',
    )
);
 
 //get the prices column
$prices = array_column($products , 'price');
print_r($prices);

// get the product names columns
$name = array_column($products, 'name','id');
print_r($name);
?>
</body>
</html>