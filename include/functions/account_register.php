<?php
/* 
    icybb 0.1
    Copyright 2017 - IcyBB Project
    License: GPL3.0
*/

// Prepare connection to the database
include "pdo-mysqli.php";

// Assign the post request data to variables.
$username = mysqli_real_escape_string($_POST['username']);
$displayname = mysqli_real_escape_string($_POST['displayname']);
$password = mysqli_real_escape_string(sha1($_POST['password'])); // Passwords use an SHA1 Hash for now. This will be changed to a more secure password hashing system before an actual release.


// Input the variables into the database
function register($username, $displayname, $password) {
    
    try {
        
        // Prepare the connection
        $conn = new PDO("mysql:host=$mysqlihost, dbname=$dbname, username=$mysqliuser, password=$mysqlipass");
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL and Bind Parameters
        $stmt = $conn->prepare("INSERT INTO users (username, displayname, password_hash, password_salt, gid) VALUES (:username, :displayname, :password_hash, :password_salt, :gid)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':displayname', $displayname);
        $stmt->bindParam(':password_hash', $password_hash);
        $stmt->bindParam(':password_salt', $password_salt);
        $stmt->bindParam(':gid', $gid);
        
        // Executate SQL
        $stmt->execute();
        }
    
    // In event of some error
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
    
    // Clear Connection Variable
    $conn = null;
}
