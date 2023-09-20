<!DOCTYPE html>
<html>

<body>

    <?php
    $r = 12;
    $d = NULL;
    $c = NULL;
    $a = NULL;
    // $r = radius, $d = diameter, $c = circumference, $a = area

    // It will calculate the diameter, circumference, and area
    $d = 2 * $r;
    $c = 2 * 3.14 * $r;
    $a = 3.14 * ($r * $r);

    echo "\nDiameter       = " . $d . " units";
    echo "\nCircumference  = " . $c . " units";
    echo "\nArea           = " . $a . " sq. units";
    ?>

</body>

</html>