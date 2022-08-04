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

        <div class="form container">
            <h1> DELETE HTML Questions </h1>
                <form method="post">
                    <div class="form-group">
                        <div class="row">
                            <i class="fa fa-user" style="color: white;" aria-hidden="true"></i>
                                <input type="text" class="login-space form-control col" id="que_no"  placeholder="Enter Question Number" name="que_no">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn-primary btn-block">DELETE</button>

                        <div class style="text-align:right;"> <br> <a href="html.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>

                </form>
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
                $que_no = $_POST['que_no'];
                
                $query="delete from html_questions where que_no ='$que_no' ";
                $ins=mysqli_query($con,$query);
                    if ($ins==$que_no) 
                        {
                            echo "<script> alert('Question Deleted Succesfully');</script>";
                        }
                    else
                        {
                            echo "<script> alert('Question not Deleted');</script>";
                        }		
            }
?>