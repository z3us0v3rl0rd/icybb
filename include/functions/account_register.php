<?php
/* 
    icebb 0.1
    Copyright 2017 - Nathaniel Suchy
    License: GPL3.0
*/

// Prepare connection to the database
include "pdo-mysqli.php";

// If connecting to the database fails
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}

// Assign the post request data to variables.
$username = mysqli_real_escape_string($_POST['username']);
$password = mysqli_real_escape_string($_POST['password']);
$passwordv = mysqli_real_escape_string($_POST['passwordv']);
$email = mysqli_real_escape_string($_POST['email']);
$dobday = mysqli_real_escape_string($_POST['dobday']);
$dobmonth = mysqli_real_escape_string($_POST['dobmonth']);
$dobyear = mysqli_real_escape_string($_POST['dobyear']);

// Input the variables into the database
function register($username, $password, $email, $dobday, $dobmonth, $dobyear) {

     $sql = 'INSERT INTO users '.
      '(username, password, email, dobdate, dobmonth, dobyear, join_date) '.
      'VALUES ($username, $password, $email, $dobday, $dobmonth, $dobyear, NOW() )';
  
}

/* if (// all info verify) {
  register($username, $password, $email, $dobday, $dobmonth, $dobyear);
  } */

?>
