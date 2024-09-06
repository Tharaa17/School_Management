<?php

$host = "localhost";
$user = "root";
$password = " ";  
$db = "schoolproject";

// Establish connection
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name =  $_POST['username'];
    $pass = $_POST['Password'];

    $sql="select * from user where username='" .$name."' AND password='" .$pass ."' ";
    
    $result = mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {
       header("location:studenthome.php");
    }

    elseif($row["usertype"]=="student")
    {
      header("location:adminhome.php");
    }

    else
    {
        echo " username or password do not match";
    }


    
}

?>