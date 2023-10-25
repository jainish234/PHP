<!DOCTYPE html>
<html>
<body>

<?php

$brands = [
 'Louis Vuitton' => "LV",
 'Hermès' => "H",
 'Gucci' => "G",
 'Prada' => "P",
 'Chanel' => "C",
 'Cartier' => "Ca"
];

$flip = array_flip($brands);
print_r($flip);
?>

</body>
</html>