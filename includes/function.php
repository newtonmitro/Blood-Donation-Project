<?php
include 'db.php';
$query = "SELECT fname, lname,Blood_Group, Sex, District, Contact_No FROM users";
$result = mysqli_query($connection, $query);
if(!$result){
    die("Database query failed.");
}

