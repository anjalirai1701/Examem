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
                        <a href="register.php">REGISTER STUDENTS</a>
                        <a href="delete-user.php">DELETE USER</a>
                        <a href="update-user.php">UPDATE USER</a>
                        <a href="logout.php"><strong> LOGOUT</strong></a>
                    </div>
        </div>

            <div class="sform container">
            <h1> Update User Detail </h1>
            
            <form method="post">
                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-user" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="name" placeholder="Enter Name" name="name" required>

                        <i class="fa fa-phone" style="color: white;" aria-hidden="true"></i>
                        <input type="number" class="form-control col" id="mobile" placeholder="Enter Phone No."name="mobile"required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-envelope-o" style="color: white;" aria-hidden="true"></i>
                        <input type="email" class="form-control col" id="email" placeholder="Enter Email Address"name="email"required>

                        <i class="fa fa-address-card-o" style="color: white;" aria-hidden="true"></i>
                        <input type="number" class="form-control col" id="roll-no" placeholder="Enter Roll No" name="rollno"required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-book" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="course" placeholder="Course Name" name="course"required>

                        <i class="fa fa-users" style="color: white;" aria-hidden="true"></i>
                       
                         <div class="gender"> Gender:   
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Other
                        </div>    
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <i class="fa fa-key" style="color: white;" aria-hidden="true"></i>
                        <input type="password" class="form-control col" id="pwd" placeholder="Enter password"name="password"required>

                        <button type="submit" name="submit" class="btn-primary btn-block">Update</button>
                    </div>
                </div>

                <!-- <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button> -->
                <div class style="text-align:right;"> <br> <a href="all-user.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>
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
 	$mobile=$_POST['mobile'];
 	$email=$_POST['email'];
    $rollno=$_POST['rollno'];
    $course=$_POST['course'];
    $gender=$_POST['gender'];
    $is_active=$_POST['is_active'];
    $faculty=$_POST['faculty'];
 	$password=$_POST['password'];

     $query="update sregister set name = '$name', mobile='$mobile', email='$email', course='$course',gender='$gender', is_active='$is_active', faculty='$faculty',password='$password' where rollno='$rollno'";

     $update=mysqli_query($con,$query);
        if($update)
        {
            echo "<script> alert('Student Details Update Successfully');</script>";
        }
        else
        {
            echo "<script> alert('Student Details Not Updated');</script>";
            header("Location: update-user.php");
        }
 		
}
?>
