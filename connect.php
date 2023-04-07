<?php
$con = new mysqli('localhost', 'simon', 'simon123', 'dbMSpace');

if(!$con){

    die(mysqli_error($con));

}

?>