<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['file'];

    echo $email;
    echo $password;
    echo $image;

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
        <h1 class="text-center my-3">User Details</h1>


    <!-- YOUR CONTENT ENDS HERE -->

</body>

</html>