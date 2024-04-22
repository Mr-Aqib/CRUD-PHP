<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Enter Info</title>
</head>
<body>
    <h1 class="text-center my-3">Student Form Portal</h1>
    <form action="./index-data.php" method="POST" class="col-lg-4 col-4 shadow rounded-4 p-4 mx-auto">
<label for="">Name</label>
<input type="text" name="name" class="form-control" id="">
<label for="">Email</label>
<input type="email" name="email" class="form-control" id="">
<label for="">Age</label>
<input type="text" name="age" id="" class="form-control">
<label for="">Date of Birth</label>
<input type="date" name="dob" id="" class="form-control">
<label for="">Gender</label>
<div class="d-flex text-align-center justify-content-around">
<div class="male">
    <label for="">Male</label>
    <input type="radio" name="gender" value="Male" id="">
</div>
<div class="female">
    <label for="">Female</label>
    <input type="radio" name="gender" value="Female" id="">
</div>
</div>
<button class="btn btn-success my-3 w-100">Submit</button>
    </form>
</body>
</html>