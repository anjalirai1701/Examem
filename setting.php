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
                    <<a href="index.php"><i class="fa fa-home"></i>HOME</a>
                        <a href="admin-login.php">ADMIN</a>
                        <a href="aboutus.php">ABOUT US</a>
                        <a href="result.php">RESULT</a>
                        <a href="feedback.php">FEEDBACK</a>
                </div>
        </div>

        <div class="form container">
            <h1>Change Password</h1>
            <form method="post">
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-lock" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="login-space form-control col" id="name" placeholder="Current Password"
                            name="current">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-lock" style="color: white;" aria-hidden="true="></i>
                        <input type="password" class="login-space form-control col" id="pwd" placeholder="New password"
                            name="new" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-lock" style="color: white;" aria-hidden="true="></i>
                        <input type="password" class="login-space form-control col" id="pwd" placeholder="Confirm password"
                            name="confirm" >
                    </div>
                </div>


                <button type="submit" name="submit" class="btn btn-primary btn-block">Update Password</button>
                </form>
                
        </div>
      </div>
      <!-- <div class style="text-align:center;"> <br> <a href="dashboard-admin.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div> -->
</div>
</body>
</html>



<?php
$con=mysqli_connect('localhost','root','');

//anjali = database name
mysqli_select_db($con,'examem') or die('plz check database');
if (isset($_POST{'submit'}))
 {
 	  $current=$_POST['current'];
    $new=$_POST['new'];
    $confirm=$_POST['confirm'];
    if($new==$confirm)
    {
        
        $query=mysqli_query($con,"update admin set password = '$new' where password='$current'");
        if($query)
        echo"<script> alert('Update Successfully');</script>";
        // echo "Update Successfully";
        else 
        echo"<script> alert('Information Incorrect');</script>";
        // echo "Information Incorrect";
    }
    else
    {
      echo"<script> alert('password is not match');</script>";
        // echo "password is not match";
    }
 }
 ?>