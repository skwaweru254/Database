<?php
include 'connect.php';

if (isset($_POST['submit'])) {


    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $image = $_POST['file'];
    //$password = crypt($_POST['password']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT)

    $sql = "insert into `tCRUD` (email,password, profile) values ('$email','$password', '$image')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Data inserted successfully";
        echo '<script>alert("Data inserted successfully")</script>';
    } else {
        die(mysqli_error($con));
    }
}

?>



<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD Operation</title>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>


    <!-- YOUR CONTENT STARTS HERE -->
        <h1 class="text-center my-3">Registration Form</h1>

    <div class="container my-5 d-flex justify-content-center">
        <form method="post" class="w-50">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required="">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required="">
            </div>
            <div class="mb-3">
                <label class="form-label">File</label>
                <input type="file" class="form-control" name="file" required="">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

    <!-- YOUR CONTENT ENDS HERE -->


    <!-- JavaScript: placed at the end of the document so the pages load faster -->
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>