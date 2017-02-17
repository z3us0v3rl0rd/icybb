<?php

include "pdo-mysqli.php";

if(! $conn ) {
die('Could not connect: ' . mysql_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$passwordv = $_POST['passwordv'];
$email = $_POST['email'];
$dobday = $_POST['dobday'];
$dobmonth = $_POST['dobmonth'];
$dobyear = $_POST['dobyear'];

function register($username, $password, $email, $dobday, $dobmonth, $dobyear) {

     $sql = 'INSERT INTO users '.
      '(username, password, email, dobdate, dobmonth, dobyear, join_date) '.
      'VALUES ($username, $password, $email, $dobday, $dobmonth, $dobyear, NOW() )';
  
}

if (// all info verify) {
  register($username, $password, $email, $dobday, $dobmonth, $dobyear);
  }
?>
