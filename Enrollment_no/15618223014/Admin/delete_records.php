<?php
$selected_id = $_POST['delete_record'];
//print_r($selected_id);

$connection = mysqli_connect("localhost", "root", "", "mca_details");

foreach ($selected_id as $myquery) {
    $query = "DELETE FROM `stud_details` WHERE Stud_ID='$myquery'";
    $execute_query = mysqli_query($connection, $query);
}

header("Location: View.php");