<?php
require 'connect.php';

ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>

 #header
  {
  background-color:black;
  font-family:helvetica;
  color:white;
  text-align:center;
  padding:10px;
  }


   #nav
    {
	background-color:#e0e0e0;
	height:700px;
    width:200px;
    float:left;
	text-align:center;
    font-family:helvetica;
	font-size:20px;
    padding:10px;
    }

    #section
    {
	 font-size:25px;
     padding:10px;
     text-align:center;

     }

    a:link {
    padding:5px;
    color:black;
    }

    a:visited {
	color:black;
    font-decoration:none;
    }

	a:hover {
    background-color:black;
    color:white;
    font-weight:bold;
    text-decoration:none;
    }


    #footer
    {
     color:white;
     font-family:Verdana;
     padding:20px;
     text-align:center;
    }

    body
    {
     background-image:url("background.jpg");
     background-size:100%;
     background-repeat:no-repeat;
	 background-attachment:fixed;
    }
</style>
</head>
<body>

<div id="header">
<h1><img src="vjtilogo.png" alt="VJTI logo" style="height:128px;"> INTEGRATED MANAGEMENT SYSTEM VJTI </h1>
<p style="text-align:right;"><a href="logout.php" class="btn btn-default btn-sm"><span

class="glyphicon glyphicon-log-out"></span> Log out</a></p>
</div>


<div id="nav">
  <strong><u>Hall</u><strong> <br><br>
  Auditorium <br><br>
  Dep 1<br><br>
  Dep 2 <br><br>
  <strong><u>Ground</u><strong>  <br> <br>
  Cricket<br> <br>
  Football<br><br>
  <strong><u>Gymkhana</u><strong> <br> <br>
  Table Tennis<br><br>
  Carrom<br><br>
  Chess<br><br>
  </div>

 <div id="section">
 <h2>Welcome <?php echo $_SESSION['user_name']; ?></h2>
 <br><br><br><br>
   <a href="gymkhanalogin.php"> GYMKHANA BOOKING </a><br><br><br><br>
   <a href="hall-homepage.php">HALL BOOKING </a> <br><br> <br><br>
   <a href="ground-homepage.php">  GROUND BOOKING </a> <br><br><br><br>

  </div>

 <div id="footer">
</div>

<button onclick="goBack()">Go Back</button>
       <script>
       function goBack() {
       window.history.back();
       }
       </script>


</body>
</html>