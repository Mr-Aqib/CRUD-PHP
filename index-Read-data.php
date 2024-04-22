<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Student Data</title>
</head>
<body>
    <h1 class="text-center my-4">All Students Data</h1>
<div class="col-lg-8  mx-auto ">
    <table class="table-stred table shadow  text-center">
        <thead >

    <tr >
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Age</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Dlete Data Row</td>
    </tr>
        </thead>
<tbody>
    <tr>
       <?php
       $connection=mysqli_connect("localhost","root","","school");
       $showing="SELECT * FROM students_data";
       $data=mysqli_query($connection,$showing);
       if(mysqli_num_rows($data) >0)
       {
        while($row = mysqli_fetch_assoc($data))
        {            ?>
            <tr>
                <td><?php  echo $row ['Id'] ?></td>
                <td><?php  echo $row ['Name'] ?></td>
                <td><?php  echo $row ['Email'] ?></td>
                <td><?php  echo $row ['Age'] ?></td>
                <td><?php  echo $row ['Dob'] ?></td>
                <td><?php  echo $row ['Gender'] ?></td>
               <td> <button class="btn btn-danger">Delete</button></td>
            </tr>
            <?php
             }

            }
            ?>
       
       
       
    </tr>
</tbody>
    </table>
</div>
</body>
</html>