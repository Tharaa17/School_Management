<?php

$host = "localhost";
$user = "root";
$password = "your_password_here";  // Replace with your actual password or leave it empty if no password
$db = "schoolproject";

// Establish connection
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $name = mysqli_real_escape_string($data, $_POST['username']);
    $pass = mysqli_real_escape_string($data, $_POST['Password']);

    // You may proceed with further SQL queries here, for example:
    // $sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
    // $result = mysqli_query($data, $sql);

    // Handle login logic here
}

?>