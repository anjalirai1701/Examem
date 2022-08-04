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
                        <a href="add_html_que.php">ADD QUESTION</a>
                        <a href="delete_html_que.php">DELETE QUESTION</a>
                        <a href="update_html_que.php">UPDATE QUESTION</a>
                        <a href="logout.php"><strong> LOGOUT</strong></a>
                    </div>
        </div>

<div class="sform container">
            <h1> UPDATE HTML Questions </h1>
            <form method="post">
                <div class="form-group">
                    <div class="row">
                    <!-- <label for="">Question No. </label> -->
                        <i class="fa fa-book" style="color: white;" aria-hidden="true"></i>
                        <input style="width:30%;" type="number" class="form-control col" id="que_no"name="que_no" placeholder="Question Number" required>
                 
                    <!-- <label for="">Question </label> -->
                        <i class="fa fa-book" style="color: white;" aria-hidden="true"></i>
                        <input style="width:70%;"type="text" class="form-control col" id="question" name="question" placeholder="Write Question Here......." required>
                        </div>
                </div>  


                <div class="form-group">
                    <div class="row">
                    <label for="">Option 1 </label>
                        <i class="fa fa-circle" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="one" name="one" placeholder="Option 1 " required>

                        <label for="">Option 2 </label>
                        <i class="fa fa-circle" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="two" name="two" placeholder="Option 2 "required>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                    <label for="">Option 3 </label>
                        <i class="fa fa-circle" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="three" name="three"placeholder="Option 3 "required>

                        <label for="">Option 4 </label>
                        <i class="fa fa-circle" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="four" name="four" placeholder="Option 4 "required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                    <label for="">Answer</label>
                        <i class="fa fa-key" style="color: white;" aria-hidden="true"></i>
                        <input type="text" class="form-control col" id="answer" name="answer"placeholder="Answer..."required>

                        <button type="submit" name="submit" class="btn-primary btn-block">UPDATE Question</button>
                    </div>
                </div>

                <!-- <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button> -->
                <div class style="text-align:right;"> <br> <a href="html.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>
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
 	$que_no=$_POST['que_no'];
 	$question=$_POST['question'];
 	$one=$_POST['one'];
    $two=$_POST['two'];
    $three=$_POST['three'];
    $four=$_POST['four'];
    $answer=$_POST['answer'];
  
    $query="update html_questions set question = '$question', one='$one', two='$two', three='$three', four='$four', answer='$answer' where que_no='$que_no'";

     $update=mysqli_query($con,$query);
        if($update)
        {
            echo "<script> alert('Question Update Successfully');</script>";
        }
        else
        {
            echo "<script> alert('Question Not Updated');</script>";
        }
 		
}
?>