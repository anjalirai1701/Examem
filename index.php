<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="main.css">
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

    <div class="oes container-fluid text-left ">

        <div class="w3-display-middle">
            <h1 class="w3-jumbo w3-animate-left">ONLINE EXAMINATION SYSTEM</h1>
            <hr class="w3-border-grey" style="margin:auto;width:40%">
            <p class="w3-large w3-center"><a href="login-student.php"><button type="button" class="login-btn btn btn-outline-dark">Log In</button></a></p>
        </div>
    </div>

    <div class="w3-display-bottomleft w3-black w3-padding-large footer"> &copy; <?php echo date('Y'); ?>. All Rights Reserved.Powered by <a href="#" title="Anjali Rai" target="_blank"> Anjali Rai</a> </div> 
</div>

</body>
</html>
