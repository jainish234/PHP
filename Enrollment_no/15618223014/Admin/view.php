<?php
$connection = mysqli_connect("localhost", "root", "", "mca_details");
$query = "select * from Stud_Details";

$execute_query = mysqli_query($connection, $query);

$number_record = mysqli_num_rows($execute_query);
echo "<form action='delete_records.php' method=post>";
echo "<table border='1'>";
echo "<tr><td>Stud_ID</td><td>First_Name</td><td>Middle_Name</td><td>Last_Name</td><td>Email</td><td>City</td>
         <td>Password</td><td>Address</td><td>Delete</td></tr>";

for ($i = 1; $i <= $number_record; $i++) {
    $fetch_data = mysqli_fetch_row($execute_query);
    echo "<tr><td>$fetch_data[0]</td>";
    echo "<td>$fetch_data[1]</td>";
    echo "<td>$fetch_data[2]</td>";
    echo "<td>$fetch_data[3]</td>";
    echo "<td>$fetch_data[4]</td>";
    echo "<td>$fetch_data[5]</td>";
    echo "<td>$fetch_data[6]</td>";
    echo "<td>$fetch_data[7]</td>";

    echo "<td><input type='checkbox' name='delete_record[]' value='$fetch_data[0]'</td>";
    echo "</tr>";
}
echo "</table>";
echo "<input type='submit' name=submit>";
echo "</form>";