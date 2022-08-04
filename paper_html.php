<html>
<html lang="en">
<head>

<script>
 function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
  preventBack();
</script>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="hii.css"> -->
  <link rel="stylesheet" href="papers.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<body>
<!-- <div style="background-color:PaleTurquoise;width:100%;height:120px;font-size:35;"><br>
APTITUDE EXAMINATION^^^
</div> -->
<div class="container">

<!-- <div style="background-image:url('back12.jpg');width:100%;height:420px;margin-top:-1.1em;">
<p style="color:red;font-size:16;"> -->

<?php 
session_start();
echo "Welcome:".$_SESSION["name"];
?>
</p>
<form method="POST">

<div style="margin-left:50em;font-size:18;"><br>
<b>(5*5=25)</b>
</div>
<div style="margin-left:50em;font-size:18;"><br>
<a href="dashboard-student.php">BACK</a>
</div>

<table class="table table-striped">
<tr>
<td>Q-1.  HTML stands for -</td> 
</tr><tr>
<td><input type="radio" name="a1" value="1">HighText Machine Language</td> </tr><tr>
<td><input type="radio" name="a1" value="2">HyperText and links Markup Language</td> </tr><tr>
<td><input type="radio" name="a1" value="3">HyperText Markup Language</td> </tr><tr>
<td><input type="radio" name="a1" value="4"> None of these</td> </tr><tr>
</tr>
</table>

<br>

<table class="table table-striped">
<tr>
<td>Q-2. The correct sequence of HTML tags for starting a webpage is -</td> </tr><tr>
<td><input type="radio" name="a2" value="1">Head, Title, HTML, body</td> </tr><tr>
<td><input type="radio" name="a2" value="2">HTML, Body, Title, Head</td></tr><tr>
<td><input type="radio" name="a2" value="3">HTML, Title, Head, Body</td></tr><tr>
<td><input type="radio" name="a2" value="4">HTML, Head, Title, Body</td></tr><tr>
</tr>
</table>

<br>

<table class="table table-striped">
<tr>
<td>Q-3. Which of the following element is responsible for making the text bold in HTML?</td></tr><tr>
<td><input type="radio" name="a3" value="1">Pre</td> </tr><tr>
<td><input type="radio" name="a3" value="2">A</td></tr><tr>
<td><input type="radio" name="a3" value="3">B</td></tr><tr>
<td><input type="radio" name="a3" value="4">Br</td></tr><tr>
</tr>
</table>

<br>

<table class="table table-striped">
<tr>
<td>Q-4.How to create an unordered list (a list with the list items in bullets) in HTML?</td></tr><tr>
<td><input type="radio" name="a4" value="1">Ul</td></tr><tr>
<td><input type="radio" name="a4" value="2">Ol</td></tr><tr>
<td><input type="radio" name="a4" value="3">Li</td></tr><tr>
<td><input type="radio" name="a4" value="4">I</td></tr><tr>
</tr>
</table>

<br>

<table class="table table-striped">
<tr>
<td>Q-5. How to insert an image in HTML?</td></tr><tr>
<td><input type="radio" name="a5" value="1">img href = "jtp.png" </td></tr><tr>
<td><input type="radio" name="a5" value="2">img url = "jtp.png"</td></tr><tr>
<td><input type="radio" name="a5" value="3">img link = "jtp.png"</td></tr><tr>
<td><input type="radio" name="a5" value="4">img src = "jtp.png"</td></tr><tr>
</tr>
</table>

<br>


<table style="margin-left:50em;margin-top:-8em;">
<tr>
<td>
<input type="submit" name="submit" value="Submit" class="btn-success"></input></td></tr>
</table>
<br><br>
</form>
</div>
</div>
<!-- <div style="background-color:skyblue;width:100%;height:auto;font-size:20;">
<b>**KEY POINTS|||</b>
<p style="margin-left:8em;margin-right:4em;margin-top:0.50em;font-size:18;">
Welcome to <b>APTITUDE EXAMINATION.</b> Every question is <b>compulsory</b> to attempt. No <b>negative marking</b> is there. Remember, once the data is been 
<b>submited</b> can't be change again and the <b>result</b> will be shown as all the sections get completed by the user.</p> -->

<?php
   $obtain=0;
   if(isset($_POST['submit']))
   {
	   
	   $que1=&$_POST['a1'];
	   $que2=&$_POST['a2'];
	   $que3=&$_POST['a3'];
	   $que4=&$_POST['a4'];
	   $que5=&$_POST['a5'];
	   if($que1=="3")
	   {
		  $obtain=$obtain+5;
		 
	   }
	   if($que2=="3")
	   {
		   $obtain=$obtain+5;
	   }
	  if($que3=="3")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que4=="1")
	  {
		  $obtain=$obtain+5;
	  }
	  if($que5=="4")
	  {
		  $obtain=$obtain+5;
	  }
	//  if($obtain>=60)
	//  {
	// 	 $result="pass";
	//  }
	//  else
	//  {
	// 	 $result="fails";
	//  }
     $tm=25;
	 $name=$_SESSION["name"];
	 $password=$_SESSION["password"];
     
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'examem') or die('plz check database');
    
	$us=$name;
	// $pass=$password
	$tm=25;
	$ob1=$obtain;
	// $rs=$result;
	$query="insert into result_html(name,totalmarks,obtain)values('$us','$tm','$ob1')";		

 $ins=mysqli_query($con,$query);

if($ins)
  {
   echo"<script> alert('submit succesfully');</script>";
//    header("location:result.php");
  }
 else
 {
	 echo $ins;
  echo"<script> alert('not submit succesfully');</script>";
	 
   }
   }
?>
</div>
</body>
</html>