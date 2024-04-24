<?php
$connection=mysqli_connect("localhost","root","","school") or die('Smoothing Happend');
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$update="UPDATE students_data Set Name='$name' ,Email='$email', Age=$age, Dob='$dob' WHERE Id=$id";
mysqli_query( $connection, $update );
header("Location:http://localhost/CRUD/");
?>