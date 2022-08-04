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
                        <a href="add_css_que.php">ADD QUESTION</a>
                        <a href="delete_css_que.php">DELETE QUESTION</a>
                        <a href="update_css_que.php">UPDATE QUESTION</a>
                        <a href="logout.php"><strong> LOGOUT</strong></a>
                    </div>
        </div>

    <div class="student-data container col-md-9">
        <h1>CSS Questions</h1>

            <form action="" method="POST">


                <table class="table table-bordered table-hover table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Q.No.</th>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Answer</th>
                            <!-- <th colspan="2" align="center">Operations</th> -->
                        </tr>
                    </thead>

                        <?php 

                            $con=mysqli_connect('localhost','root','');
                            mysqli_select_db($con,'examem') or die('plz check database');
                            $query=mysqli_query($con,"select * from css_questions");
                            while($dt=mysqli_fetch_array($query))
                                {
                        ?>

                        <tbody>
                        <!-- echo" -->
                            <tr>
                                <td><?php echo $dt['que_no']; ?></td>
                                <td><?php echo $dt['question']; ?></td>
                                <td><?php echo $dt['one'];?></td>
                                <td><?php echo $dt['two']; ?></td>
                                <td><?php echo $dt['three'];?></td>
                                <td><?php echo $dt['four'];?></td>
                                <td><?php echo $dt['answer'];?></td>
<!-- 
                                <td style="color:green;"><a href="update-user.php? id=<?php echo $dt['name']; ?> " data-toggle="tooltip" data-placement="bottom" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"> </i></a></td>

                                <td style="color:red;"><a href="delete-user.php? id=<?php echo $dt['name']; ?> " data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash" aria-hidden="true"> </i></a></td> -->

                                <!-- <td><a href="update-user.php?name=$result[name] & mobile=$result[name]">Update</a></td>

                                <td><a href="delete-user.php?rn=$result[rollno]" onclick='return checkdelete()'>Delete</a></td> -->
                            </tr>
                            <!-- "; -->

                        </tbody>
                                <?php }?>
                    </table>
                    <div class style="text-align:right;">  <br> <a href="questions.php" onclick="return confirm('Are you sure?')" id="back"> <-- Go Back </a> </div>
            </form>
    </div>
    </div>
</body>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


</html>
        

