<!DOCTYPE html>
<html>
<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.nav {
    /* border-bottom: 1px solid #EAEAEB; */
    display: inline;
    /* float: right; */
    text-align: right;
    height: 70px;   /*hamburger*/
    line-height: 70px;
}
  /* ------------- Menu ------------ */
.menu {
    margin: -60px 30px 0 0;
}
.menu a {
    clear: right;
    text-decoration: none;
    color: gray;
    margin: 0 10px;
    line-height: 70px;
}
.menu a:hover{
    border-bottom: 2px solid grey;
}
label {
    margin: -60px 20px 0 0;
    font-size: 36px;
    line-height: 70px;
    display: none;
    width: 40px;
    float: right;
    color: white;
}
#toggle {
    display: none;
}
@media only screen and (max-width: 780px) {
    label {
        display: block;
        cursor: pointer;
    }
    .menu {
        text-align: center;
        width: 100%;
        display: none;
    }
    .menu a {
        display: block;
        border-bottom: 1px solid #EAEAEB;
        margin: 0;
     
    }
    #toggle:checked + .menu {
        display: block;
    }
}

</style>
<body id="myPage">

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
</div>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="images/admin1.jpg" alt="boat" style="width:100%;min-height:350px;max-height:400px;">
</div>

<div class="w3-container w3-padding-58 w3-center" id="team">
<h2><strong><u>Online Examination System </u></strong></h2>
<p>IT PROVIDES FACILITY TO CONDUCT ONLINE EXAMINATIONS.</p>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-58 w3-center" id="team">
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/anjali.jpeg" alt="Boss" style="width:45%" class="w3-rectangle w3-hover-opacity">
  <h3>Anjali Rai</h3>
  <p>Web Developer</p>
</div>

<p> <strong>DESIGNED BY <a href="https://twitter.com/ajlkn">Anjali Rai</a></strong> </p>
<div>I ANJALI RAI (1813051009) students of 6th semester Diploma in computer engineering, Rajokari Institute of Technology, Rajokari, hereby declare that the project entitled “ONLINE EXAMINATION SYSTEM” submitted to the Rajokari institute of technology during the academic year 2020-21 is a record of a work done by us under the guidance of Ms. Carynthia Kharkongor Lecturer at Rajokari Institute of Technology, Rajokari. This project work is submitted in partial fulfillment of the requirements for the award of the diploma of computer engineering.</div>
<BR></BR>
<strong>LANGUAGES USED</strong> HTML CSS JS PHP MYSQL
</div>
</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  New Delhi,India</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 988345677</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  anjali@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" method="post" target="_blank">
      <div class="w3-section">      
        Name <input class="w3-input" type="text" name="name" required>
      </div>
      <div class="w3-section">      
        Email <input class="w3-input" type="text" name="email" required>
      </div>
      <div class="w3-section">      
        Message <input class="w3-input" type="text" name="message" required>
      </div>  
      <button type="submit" name="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

<?php

$con=mysqli_connect('localhost','root','');

//examem = database name
mysqli_select_db($con,'examem') or die('plz check database');
if (isset($_POST{'submit'}))
 {
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$message=$_POST['message'];
 
 $query="insert into contact(name,email,message)values('$name','$email','$message')";

 $ins=mysqli_query($con,$query);
 if ($ins) {
     echo "<script> alert('Message sent succesfully');</script>";
 }
 else
 {
    echo "<script> alert('Message not sent');</script>";
 }
 		
}
?>
<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.instagram.com/anjalirai1701/" title="Instagram +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://github.com/anjalirai1701" title="Github"><i class="fa fa-github"></i></a>
  <a class="w3-button w3-large w3-teal" href="#" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>


</body>
</html>
