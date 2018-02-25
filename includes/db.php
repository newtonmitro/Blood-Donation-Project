<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword="";
$dbname = "blood_donation";

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(mysqli_connect_errno()){
    die("Database Connection failed. " . mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
    );
}