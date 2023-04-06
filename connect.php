<?php
$con = new mysqli('localhost', 'simon', 'simon123', 'dbMSpace');

if($con){

    echo"Successfully connected to database";

}
else{
    die(mysqli_error($con));
}
?>