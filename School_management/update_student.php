<?php
session_start();
     
      if(!isset($_SESSION['username']))
      {
        header("location:login.php");
      }
      elseif($_SESSION['usertype']=='student')
      {
        header("location:login.php");
      }

      $host="localhost:3307";
      $user="root";
      $password="";
      $db="schoolproject";

      $data=mysqli_connect($host,$user,$password,$db);
      
      $id=$_GET['student_id'];

      $sql="SELECT * FROM user WHERE id='$id' ";

      $result=mysqli_query($data,$sql);

      $info=$result ->fetch_assoc();


   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <?php
        include 'admin_css.php';
    ?>

    <style>
        label
        {
            display:inline-block;
            width:100px;
            text-align:right;
            padding-top: 10px;
            padding-bottom:10px;
        }

        .div_deg
        {
            background-color:skyblue;
            width:400px;
            padding-bottom:70px;
            padding-top:70px;
        }
    </style>


    
</head>

<body>
<?php
    include 'admin_sidebar.php';


    ?> 
    
   <div class="content">
    <center>
    <h1>
    Update Student
    </h1>
       
    <div class="div_deg">
        <form actiuon="#" method="POST">
            <div>
                <label >Username</label>
                <input type="text" name="name" value="<?php echo "{$info['username']}";  ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="name" value="<?php echo "{$info['email']}";  ?>">
            </div>
            <div>
                <label>Phone</label>
                <input type="text" name="name" value="<?php echo "{$info['phone']}";  ?>">
            </div>
            <div>
                <label>Password</label>
                <input type="text" name="name" value="<?php echo "{$info['password']}";  ?>">
            </div>
            <div>
                
                <input class="btn btn-success" type="submit" name="update value" value="Update">
            </div>
            
        </form>
    </div>
    </center>
    
   </div>




</body>
</html>