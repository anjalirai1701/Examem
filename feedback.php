<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
  <!-- <link rel="stylesheet" href="hii.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <title>HOME</title>
</head>
<body>
    <div class=" container-fluid index">

<div class=" w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Examem</div>

<div class="nav">
    <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
        <div class="menu">
        <a href="index.php"><i class="fa fa-home"></i>HOME</a>
            <a href="admin-login.php">ADMIN</a>
            <a href="aboutus.php">ABOUT US</a>
            <a href="result.php">RESULT</a>
            <a href="feedback.php">FEEDBACK</a>
        </div>
</div>

        <div class="form container">
            <h1> Feedback Form </h1>
            <form method="post">
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-user" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="name" placeholder="Enter Name" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-phone" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="subject" placeholder="Subject"
                            name="subject">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-envelope-o" style="color: white;" aria-hidden="true"></i>
                        <input type="email" class="form-control col" id="email" placeholder="Enter Email Address"
                            name="email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-address-card-o" style="color: white;" aria-hidden="true"></i>
                        <textarea class="feedback" name="feedback" id="feedback" cols="30" rows="10"> </textarea>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>
                
            </form>
        </div>
    </div>
    </div>
</body>
</html>


<?php

$con=mysqli_connect('localhost','root','');

//examem = database name
mysqli_select_db($con,'examem') or die('plz check database');
if (isset($_POST{'submit'}))
 {
 	$name=$_POST['name'];
 	$subject=$_POST['subject'];
 	$email=$_POST['email'];
    $feedback=$_POST['feedback'];
  
 $query="insert into feedback(name,subject,email,feedback)values('$name','$subject','$email','$feedback')";

 $ins=mysqli_query($con,$query);
 if ($ins==1) {
    echo "<script> alert('submit succesfully');</script>";
	  header("location:index.php");
      
 }
 else
 {
    echo "<script> alert('not submit succesfully');</script>";
 }
 		
}
