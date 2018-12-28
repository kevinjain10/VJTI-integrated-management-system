<?php
require 'connect.php';

ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gymkhana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
	  margin-bottom: 15px;
      border-radius: 0;
    }


    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
    }

	h1 {font-size: 30px}

	h2 {font-size: 25px}

	p {font-size: 20px }

	body
    {
     background-image:url("bg.jpg");
     background-size:100%;
     background-repeat:no-repeat;
     background-attachment:fixed;
    }
       @media (max-width: 300px) {
  .carosel-item {
    width: 100%;
  }
}
@media (min-width: 300px) {
  .carosel-item {
    width: 50%;
  }
}
@media (min-width: 500px) {
  .carosel-item {
    width: 33.333%;
  }
}
@media (min-width: 768px) {
  .carosel-item {
    width: 25%;
  }
}
.carosel {
  position: relative;
  background-color: none;

}



.carosel-inner {
  white-space: nowrap;
  overflow: hidden;
  font-size: 0;
}
.carosel-item {
  display: inline-block;
}
.carosel-control {
  position: absolute;
  top: 50%;
  padding: 15px;
  box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(-50%);
  border-radius: 50%;
  color: rgba(0, 0, 0, 0.5);
  font-size: 30px;
  display: inline-block;
}
.carosel-control-left {
  left: 15px;
}
.carosel-control-right {
  right: 15px;
}
.carosel-control:active,
.carosel-control:hover {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.8);
}

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" style="height: 60px; font-size: 20px">
  <div class="container-fluid" style="padding-bottom:20px; padding-top:5px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <img src="Logo.png" class="pull-left" height="50px">
      <a class="navbar-brand" href="student-homepage.php" style="margin-left: 5px; font-size: 20px">INTEGRATED MANAGEMENT SYSTEM VJTI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </div>
  </div>
</nav>
<div class="container text-center" style="font-size: 20px;">
  <div class="row content">
    <div class="col-md-12 text-center">
       <h1>Welcome <?php echo $_SESSION['user_name']; ?></h1>

    </div>
     <h3>
        <?php

$query="SELECT * FROM `gymkhana` WHERE `username`='{$_SESSION['user_name']}' AND `status`='view'";
 if($query_run=mysqli_query($conn,$query))
 { if(mysqli_num_rows($query_run)==0)
   {echo '<br>You do not have any current bookings!!<br><br>';
      ?>
     <div class="col-md-12 text-center">
	  <br>
	    <button class="btn btn-success btn-lg" type="button" onclick="window.location.href='gymkhanalogin.php'">BOOK</button>
	  </div>

	  <?php
   }
   if(mysqli_num_rows($query_run)>=1)
   {echo '<br><br>Your current bookings are:<br><br>';

        ?>
              </h3>

	<div class="col-md-12">
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 15px;
    }
    </style>
     <div class="table">
        <table class="table table-striped" align="center">

    <thead>
                <tr>
                <th>delete</th>
                  <th>sr.no</th>
                  <th>slot-time</th>
                  <th>username</th>
                  <th>game type and table</th>
                </tr>
              </thead>
              <tbody>

               <form action="gymkhanahomepage.php" method="POST">
     <?php
 while($row = mysqli_fetch_assoc($query_run))
 {    switch($row["slotno"])
      { case 1:$st='9:00am-10:00am';break;
        case 2:$st='10:00am-11:00pm';break;
        case 3:$st='11:00pm-12:00pm';break;
        case 4:$st='12:00pm-01:00pm';break;
        case 5:$st='02:00pm-03:00pm';break;
        case 6:$st='03:00pm-04:00pm';break;
        case 7:$st='04:00pm-05:00pm';break;
        case 8:$st='05:00pm-06:00pm';break;
        default:echo 'invalid input';


      }
      $_SESSION['gymkhanaid']=$row["sr.no"];


   ?>

           <tr>
                      <td><input  type="radio" name="deletesr" value='<?php echo $row["sr.no"]; ?>'></td>
                      <td><?php echo $row["sr.no"]; ?></td>
                      <td><?php echo $st; ?></td>
                      <td><?php echo $row["username"]; ?></td>
                      <td><?php echo $row["game"]; ?></td>
            </tr>

   <?php
   }
   ?>


  </tbody>
  </table>
  </div>
  </div>
  <div class="col-md-6 text-right">


                       <button  class="btn btn-danger btn-lg"  type="submit" value="Delete">Delete</button>
                       </div>
               </form>
                   <div class="col-md-6 text-left">
         
   <button type="button" onclick="window.location.href='gymkhanalogin.php'" class="btn btn-success btn-lg">BOOK A TABLE</button>
    </div>


   <?php

   }


   }

     if(isset($_POST['deletesr'])&&!empty($_POST['deletesr']))
   {
     $id=$_POST['deletesr'];

      $sql="SELECT * FROM `gymkhana` WHERE `username`='{$_SESSION['user_name']}' AND `sr.no`='$id'";
      if($sql_run=mysqli_query($conn,$sql))
      {  if(mysqli_num_rows($sql_run)==0)
           {echo '<br>This table is not booked in your name or the booking is already canceled';
           }
         if(mysqli_num_rows($sql_run)==1)
           {// $querry="DELETE FROM `gymkhana` WHERE `sr.no`='$id'";
           $querry="UPDATE `gymkhana` SET `status`='delete' WHERE `sr.no`='$id'";
             if($querry_run=mysqli_query($conn,$querry))
             header('Location:gymkhanahomepage.php');
             else
             echo "Error: " . $querry . "<br>" . mysqli_error($conn);
           }


     }
   }


    ?>

    <div class="col-md-12 text-left" style="margin-top: 50px;">
            <div class="carosel" id="carosel1">
  <div class="carosel-inner">
    <img class="carosel-item" src="chess1.jpg" />
    <img class="carosel-item" src="tt1.jpg" />
    <img class="carosel-item" src="chess.jpg" />
    <img class="carosel-item" src="tt.jpg" />
  </div>
</div>


   </div>
  </div>
</body>
</html>
