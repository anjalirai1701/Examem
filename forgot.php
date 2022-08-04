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
  <link rel="stylesheet" href="hiii.css">
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
                    <h1 class="form-heading">Recover Your Password </h1>
                    <p>Having an identity crisis? You can recover your EXAMEM password Using the Email address and Mobile Number associated with your acccount.</p>
            
                        <form method="post">
                            <div class="form-group">
                                <div class="row">
                                    <input type="text" class="recover-space form-control col" id="email" name="email" placeholder="Ex:- stuent@gmail.com"name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <input type="text" class="recover-space form-control col" id="mobile" name="mobile" placeholder="Ex:- 91+ 123456789" >
                                </div>
                            </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-block"> Recover</button>
                        </form> 
                        
                            <div class style="text-align:right;">  <br> <a href="login-student.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>
                </div>
                            
    </div>
</div>    
</body>
</html>


<?php
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'examem') or die('plz check database');
if (isset($_POST{'submit'}))
 {
 	$em=$_POST['email'];
 	$mn=$_POST['mobile'];
   
 $query=mysqli_query($con,"select password from sregister where email = '$em' and mobile='$mn'");
 $ps=mysqli_fetch_array($query);

 if ($ps>0) {
 	echo " <font color='red'> your password is " .$ps['password'];
    //  echo"<font color='red'> Failed to Deleted Record From Database";
    // echo "<script> alert('Your password is' $ps 'password' );</script>";
 }
 else
 {
 	echo "your username is not exist";
 }
 		
}
?>