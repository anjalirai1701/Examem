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
  <link rel="stylesheet" href="student.css">
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

    <div class="student-data container col-md-9">
        <h1> <strong> EXAMEM </strong>RESULT</h1>

            <form action="" method="POST">


                <table class="table table-bordered table-hover table-dark table-striped">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Subject</th>
                            <th>RESULT</th>
                        </tr>
                    </thead>
                            <tr>
                              <td>1.</td>
                              <td>HTML</td>
                              <td class="start"><a href="result_html.php"><input type="button" value="VIEW" ></a> </td>
                            </tr>

                            <tr>
                              <td>2.</td>
                              <td>CSS</td>
                              <td class="start"><a href="result_css.php"><input type="button" value="VIEW" ></a> </td>
                            </tr>

                            <tr>
                              <td>3.</td>
                              <td>PHP</td>
                              <td class="start"><a href="result_php.php"><input type="button" value="VIEW" ></a> </td>
                            </tr>

                            <tr>
                              <td>4.</td>
                              <td>MYSQL</td>
                              <td class="start"><a href="result_mysql.php"><input type="button" value="VIEW" ></a> </td>
                            </tr>
                    </table>
                    <!-- <div style="text-align:right;">  <br> <a href="dashboard-admin.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div> -->
            </form>
    </div>
    </div>
    </div>
</body>

</html>
        

