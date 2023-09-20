<!DOCTYPE html>
<html>

<body>

  <?php
  /* Define a variable and assign a value to it to find the factorial.*/
  $n = 5;

  /*Define the variable where you want to store the factorial number value.*/
  $f = 1;

  /*Iterate the loop to find the factorial.*/
  for ($i = 1; $i <= $n; $i++) {
    $f = $f * $i;
  }
  /*Display the output.*/
  echo "Factorial of $n is $f";
  ?>

</body>

</html>