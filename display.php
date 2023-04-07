<?php
include 'connect.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    //$password = crypt($_POST['password']);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT)
    $image = $_FILES['file'];


    $imagefilename = $image['name'];
    $imagefileerror = $image['error'];
    $imagefiletemp = $image['tmp_name'];
    $imagefiletype = $image['type'];
    $filename_separate = explode('.', $imagefilename);
    //$file_extension = strtolower($filename_separate[1]);
    $file_extension = strtolower(end($filename_separate));



    $extension = array('jpg', 'jpeg', 'png');

    if (in_array($file_extension, $extension)) {

        $upload_image = './images/' . $imagefilename;
        if (move_uploaded_file($imagefiletemp, $upload_image)) {


            echo '<script>alert("Image inserted successfully")</script>';

            $sql = "insert into `tCRUD` (email,password, profile) values ('$email','$password', '$upload_image')";
            //$result = mysqli_query($con, $sql);

            if (mysqli_query($con, $sql)) {
                echo '<script>alert("Data inserted successfully")</script>';
            } else {
                die(mysqli_error($con));
            }
        } else {

            echo '<script>alert("Image insertion failed")</script>';
        }
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
    <h1 class="text-center my-3">User Details</h1>
    <div class="container mt-5 d-flex justify-content-center">

        <table class="table table-bordered w-50">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Profile</th>
                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "select * from `tCRUD`";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $image1 = $row['profile'];


                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td><img src=' . $image1 . ' /></td>
                </tr>';

                    # code...
                }





                ?>

            </tbody>
        </table>
    </div>


    <!-- YOUR CONTENT ENDS HERE -->

</body>

</html>