<?php
     error_reporting(0);
     session_start();
     session_destroy();

     if($_SESSION['message'])
     {
        $message=$_SESSION['message'];

        echo "<script type='text/javascript'>
        
        alert('$message')
        </script>";
     }
?>



<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Student Managemet System</title>
    <link rel="stylesheet" type="text/css" href="Style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</head>
<body>
    <nav>
        <label class="logo">W-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
            
        </ul>
    </nav>
   
    <div class="section1">
         <label class="img_text">We Teach Students With Care</label>   
        <img  class="main_img" src="Classroom1.jpg">
    </div>
   
    <div class="container">
        
        <div class="row">
               
              <div class="col-md-4">
                  <img class="welcome_img" src="school.jpg">
              </div>

              <div class="col-md-8">
                  <h1>Welcome to W-School</h1>
                  <p>W-School is a comprehensive online 
                    educational platform designed to provide accessible, 
                    high-quality learning experiences for students of all 
                    ages and backgrounds. Offering a wide range of courses
                    spanning technology, business, arts, languages, and more,
                    W-School aims to empower learners to achieve their
                    personal and professional goals. The platform features
                    live, interactive classes led by experienced educators 
                    and industry experts, allowing students to engage in
                    real-time discussions, participate in hands-on projects,
                    and receive personalized feedback. With flexible scheduling, 
                    a user-friendly interface, and a focus on practical,
                    career-oriented education, W-School is committed to making 
                    quality education accessible from anywhere in the world.</p>
              </div>
        </div>
    </div>
   
    <center>
        <h1>Our Teachers</h1>
    </center>

    <div class="container">

       <div class="row">
           <div class="col-md-4">
              <img class="teacher" src="teacher1.png">
              <p>Mr. Patel focuses on coding with hands-on projects,
                 guiding students to create real-world applications 
                 and develop problem-solving skills.</p>
           </div>

           <div class="col-md-4">
              <img class="teacher" src="teacher2.jpg"> 
              <p>Ms. Carter teaches literature through dynamic storytelling
                 and lively discussions, inspiring students to think critically 
                 and express themselves.</p>
           </div>

           <div class="col-md-4">
               <img class="teacher" src="teacher3.png">
               <p>Mrs. Nguyen makes math engaging with clear explanations
                 and real-life examples, helping students grasp complex 
                 concepts with ease.</p>
           </div>

       </div>

    </div>

    <center>
        <h1>Our courses</h1>
    </center>

    <div class="container">

       <div class="row">
           <div class="col-md-4">
              <img class="teacher" src="Subject1.png">
              <h4>Maths</h4>
           </div>

           <div class="col-md-4">
              <img class="teacher" src="Subject2.jpg"> 
              <h4>Science</h4>
           </div>

           <div class="col-md-4">
               <img class="teacher" src="Subject3.jpg">
               <h4>History</h4>
           </div>

       </div>

    </div>

    <center>
        <h1>Admission Form</h1>
    </center>

    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div>
                
                <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
            </div>
        </form>

    </div>

    <footer>
        <h3 class="footer_text">All @copyright reserved by web tech </h3>
    </footer>

</body>
</html>

