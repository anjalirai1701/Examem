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
  <link rel="stylesheet" href="st.css">
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
                        <!-- <a href="contact-delete.php">DELETE CONTACT</a> -->
                        <a href="logout.php"><strong> LOGOUT</strong></a>
                    </div>
        </div>

        <div class="student-data container">
        <h1>Contact Details</h1>

        <form action="" method="POST">

<table class="table table-hover table-dark table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email Address</th>
            <th>Message</th>
        </tr>
    </thead>
                            <?php 

                            $con=mysqli_connect('localhost','root','');
                            mysqli_select_db($con,'examem') or die('plz check database');
                            $query=mysqli_query($con,"select * from contact");
                            while($dt=mysqli_fetch_array($query))
                                {
                            ?>

                        <tbody>
                            <tr>
                                <td><?php echo $dt['name']; ?></td>
                                <td><?php echo $dt['email'];?></td>
                                <td><?php echo $dt['message']; ?></td>
                            </tr>
                        </tbody>
                                <?php }?>
                    </table>
                    <div class style="text-align:right;">  <br> <a href="dashboard-admin.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>
            </form>
    </div>