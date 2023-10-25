<!DOCTYPE html>
<html>
<body>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a)."<br>";
print_r ($a);

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?>

</body>
</html>
