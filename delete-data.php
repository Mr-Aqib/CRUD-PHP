<?php
$connection=mysqli_connect("localhost","root","","school") or die('Smoothing Happend');
$id=$_GET['id'];
$delete="DELETE FROM students_data WHERE Id=$id";
mysqli_query($connection,$delete);
header ("Location: http://localhost/CRUD/index-Read-data.php");
?>