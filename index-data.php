<?php
$connection=mysqli_connect("localhost","root","","school") or die('Smoothing Happend');

$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$data="INSERT INTO students_data (Name,Email,Age,Dob,Gender) VALUES 
('{$name}','{$email}',$age,'{$dob}','{$gender}')";
 
 mysqli_query($connection,$data);
 header("Location: http://localhost/CRUD/");
?>