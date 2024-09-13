<?php
session_start();
     
      if(!isset($_SESSION['username']))
      {
        header("location:login.php");
      }

      elseif($_SESSION['usertype']=='admin')
      {
        header("location:login.php");
      }

   
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
    <a href="logout.php">Logout</a>
</head>

<body>
    <h1>Student Home</h1>
</body>
</html>