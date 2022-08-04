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
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="hii.css">
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
                <a href="logout.php" onclick="return confirm('Are you sure?')"><strong>LOGOUT</strong></a>
            </div>
    </div>
        <div class="flex-container">
  <div style="height: 100px" > <i class="fa fa-book" ></i> <a href="html.php"> HTML </a> </div>
  <div style="height: 100px" > <i class="fa fa-book" ></i><a href="css.php"> CSS </a> </div>  
  <div style="height: 100px" > <i class="fa fa-book" ></i> <a href="php.php"> PHP </a> </div>
  <div style="height: 100px" > <i class="fa fa-book" ></i> <a href="mysql.php"> MYSQL </a> </div>
</div>
<div class style="text-align:center;"> <br> <a href="dashboard-admin.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>


    <div class="w3-display-bottomleft w3-black w3-padding-large footer"> &copy; <?php echo date('Y'); ?>. All Rights Reserved.Powered by <a href="#" title="Anjali Rai" target="_blank"> Anjali Rai</a> </div> 
</div>
</body>
</html>
