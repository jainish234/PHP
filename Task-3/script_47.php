<!DOCTYPE html>
<html>
<body>
<?php
$names = ['John', 'Jane', 'Michael'];
$ages = [25, 30, 35];
$countries = ['USA', 'Canada', 'UK'];

$result = array_map(function ($name, $age, $country) {
    return ['name' => $name, 'age' => $age, 'country' => $country];
}, $names, $ages, $countries);

print_r($result);

?>
</body>
</html>