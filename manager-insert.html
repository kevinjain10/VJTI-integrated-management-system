<?php
require 'connect.php';
ob_start();
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>IMS VJTI</title>
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

.table-no-border>thead>tr>th,
.table-no-border>tbody>tr>th,
.table-no-border>tfoot>tr>th,
.table-no-border>thead>tr>td,
.table-no-border>tbody>tr>td,
.table-no-border>tfoot>tr>td {
  border-top: none;
  text-align: left;
  font-size: 20px;
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
      <a class="navbar-brand" href="manager-homepage.php" style="margin-left: 5px; font-size: 20px">INTEGRATED MANAGEMENT SYSTEM VJTI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </div>
  </div>
</nav>
<div class="container text-center" style="font-size: 20px">
  <div class="row content">
    <div class="col-md-12 text-center">
	 <?php
if(isset($_POST['date'])&& isset($_POST['time'])&&isset($_POST['username'])&&isset($_POST['purpose'])&&isset($_POST['halltype']))
 { if(!empty($_POST['date'])&&!empty($_POST['time'])&&!empty($_POST['username'])&&!empty($_POST['purpose'])&& !empty($_POST['halltype']))
    { $slotno=$_POST['time'];
      $date=$_POST['date'];
      $type=$_POST['halltype'];
      $username=$_POST['username'];
        $purpose=$_POST['purpose'];
        $usertype=$_POST['usertype'];
        switch($slotno)
        { case 0:$time='No slot selected';break;
          case 1:$time='09';break;
          case 2:$time='11';break;
          case 3:$time='13';break;
          case 4:$time='15';break;
          default: echo 'invalid input';break;
        }

             $_SESSION['slotno']=$slotno;
             $_SESSION['date']=$date;
            $_SESSION['username']=$username;
            $_SESSION['purpose']=$purpose;
             $_SESSION['type']=$type;

             $t=time();
           //  date_default_timezone_set("Asia/India");
           date_default_timezone_set('Asia/Calcutta');

             $q="SELECT * FROM `users` WHERE `username`='{$_POST['username']}' AND `usertype`='{$_POST['usertype']}'";
         if($queri_run=mysqli_query($conn,$q))
          { if(mysqli_num_rows($queri_run)==0)
            echo 'User must be either a student or a staff';
         else if(mysqli_num_rows($queri_run)==1)


            { if($_SESSION['date']>(date("Y-m-d",$t))||($_SESSION['date']==(date("Y-m-d",$t))&& $time>date('H',$t)))

     { $query="SELECT * FROM `hallentry` WHERE `date`='$date' AND `slotno`='$slotno' AND `halltype`='$type'";

  if($query_run=mysqli_query($conn,$query))
     {
       if(mysqli_num_rows($query_run)==0)
             {

               $queri="INSERT INTO `hallentry`(`id`,`slotno`,`date`,`username`,`purpose`,`halltype`,`usertype`,`status`)
     VALUES('','{$_SESSION['slotno']}','{$_SESSION['date']}','{$_SESSION['username']}','{$_SESSION['purpose']}','{$_SESSION['type']}','{$_SESSION['usertype']}','view')";
        if(mysqli_query($conn,$queri))
         {
          header('Location:manager-homepage.php');
         	}
                  else {
     	  	 echo "Error: " . $queri . "<br>" . mysqli_error($conn);
    	              }
             }//no 0



                else if(mysqli_num_rows($query_run)==1)
              {     $row = mysqli_fetch_assoc($query_run);
                if($row["status"]=='delete')
                {  $queri="UPDATE `hallentry` SET `id`='{$row["id"]}',`slotno`='{$_SESSION['slotno']}',`date`='{$_SESSION['date']}',`username`='{$_SESSION['username']}',`purpose`='{$_SESSION['purpose']}',`halltype`='{$_SESSION['type']}',`usertype`='{$_SESSION['usertype']}',`status`='view' WHERE `id`='{$row["id"]}'";
                   if(mysqli_query($conn,$queri))
                {
          header('Location:manager-homepage.php');
         	}
                  else {
     	  	 echo "Error: " . $queri . "<br>" . mysqli_error($conn);
    	              }
                }
                else
                echo '<br>Sorry this slot is already booked.Select another slot.';

              }
                }  //query

             else
             echo '<br>Please enter a valid date and time';




    }
    }
    }

 }
    else
    {
      echo '<br>Enter all details';
    }
  }

 ?>

<form action="manager-insert.php" method="POST">
<table class="table table-no-border" >

<tbody>
<tr>
  <td>Date:</td>
  <td><input type="date" name="date" style="font-size: 20px; width:250px;"></td>
  <td>Time slot:</td>
  <td> <select name="time" style="font-size: 20px; width: 250px;">
		<option value="0">--</option>
		<option value="1">9-11</option>
		<option value="2">11-1</option>
		<option value="3">1-3</option>
		<option value="4">3-5</option>
	   </select> </td>
</tr>
<tr>
  <td>Username:</td>
  <td><input type="text" name="username" placeholder="Enter username" style="font-size: 20px; width: 250px;"></td>
  <td>Type of the hall:</td>
  <td> <select name="halltype" style="font-size: 20px; width: 250px;">
		<option value="auditorium">auditorium</option>
		<option value="dep1">dep1</option>
		<option value="dep2">dep2</option>
	   </select> </td>
</tr>
<tr>
<td>Usertype:</td>
  <td><select name="usertype" style="font-size: 20px; width: 250px;">
	  <option value="student">Student</option>
	  <option value="staff">Staff</option>
	  </select></td>
  <td>Purpose:</td>
  <td><textarea name="purpose" rows="2" cols="10" placeholder="Enter purpose" style="font-size: 20px; width: 250px;"></textarea></td> <br><br>

</tr>

</tbody>
</table>
<button type="submit" class="btn btn-success btn-lg" >Submit</button>
</form>
</div>
<div class="col-md-12 text-left" style="margin-top: 50px;">
            <div class="carosel" id="carosel1">
  <div class="carosel-inner">
    <img class="carosel-item" src="hall.jpg" />
    <img class="carosel-item" src="audi1.jpg" />
    <img class="carosel-item" src="audi.jpg" />
    <img class="carosel-item" src="hall2.jpg" />
  </div>
</div>
</div>
</div>

</body>
</html>