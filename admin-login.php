<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
  <link rel="stylesheet" href="phone.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
            <h1>Admin Login</h1>
            <form method="post">
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-user" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="login-space form-control col" id="name" placeholder="Enter Admin Username"
                            name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-lock" style="color: white;" aria-hidden="true="></i>
                        <input type="password" class="login-space form-control col" id="pwd" placeholder="Enter password"
                            name="password" >
                    </div>
                </div>


                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>

    </div>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','');
//examem = database name
mysqli_select_db($con,'examem') or die('plz check database');

//login== name in button
if (isset($_POST{'login'}))
 {
 	$name=$_POST['name'];
 	$password=$_POST['password'];

    $query=mysqli_query($con,"select *from admin where name='$name' and password='$password'");

    //$row=mysqli_num_rows($query); == row me check krega ki register h bhi ya nhi
    $row=mysqli_num_rows($query);

 if ($row==1) {
     //header == used to redirect into next page
 	header("location:dashboard-admin.php");
 }
 else
 {
    echo"<script> alert('user and password not valid');</script>";
 }
 		
}
?>
