<?php

$targetDirectory="Upload/";
$tagretFile = $targetDirectory . basename($_FILES["image"]["name"]);

move_uploaded_file($_FILES["image"]["tmp_name"],$tagretFile);

$connect=mysqli_connect("localhost","root","","mydemo");

$query="INSERT INTO `myimages`(`image_path`) VALUES ('[$tagretFile]')";
$exe_query=mysqli_query($connect,$query);

header("location:fileupload.php");
?>