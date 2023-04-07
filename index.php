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
        echo '<script>alert("Data inserted successfully")window.location.href="display.php";</script>';
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
        <form method="post" class="w-50" action="display.php">
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required="" placeholder="Email Address">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required="" placeholder="Password">
            </div>
            <div class="mb-3">
                <label class="form-label">File</label>
                <input type="file" class="form-control" name="file" required="">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>

    <!-- YOUR CONTENT ENDS HERE -->

</body>

</html>