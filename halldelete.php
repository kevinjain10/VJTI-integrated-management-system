<?php
ob_start();
session_start();

require 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>IMS VJTI</title>
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
	height:1000px;
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
  </div>


<div id="section">
<?php

$query="SELECT * FROM `hallentry` WHERE `username`='{$_SESSION['user_name']}'";
 if($query_run=mysqli_query($conn,$query))
 { if(mysqli_num_rows($query_run)==0)
   {echo '<br>You do not have any current bookings!!';
   }
   if(mysqli_num_rows($query_run)>=1)
   {echo '<br><br>Your current bookings are:<br><br>';

        ?>
    <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 15px;
    }
    </style>
        <table align="center">
    <thead>
                <tr>
                  <th>id</th>
                  <th>slot-time</th>
                  <th>date</th>
                  <th>username</th>
                  <th>purpose</th>
                 <th>halltype</th>
                </tr>
              </thead>
              <tbody>

     <?php
 while($row = mysqli_fetch_assoc($query_run))
 {    switch($row["slotno"])
      { case 1:$st='9:00am-11:00am';break;
        case 2:$st='11:00am-01:00pm';break;
        case 3:$st='01:00pm-03:00pm';break;
        case 4:$st='03:00pm-05:00pm';break;
        default:echo 'invalid input';

      }
      $_SESSION['hallid']=$row["id"];


   ?>

           <tr>
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $st; ?></td>
                      <td><?php echo $row["date"]; ?></td>
                      <td><?php echo $row["username"]; ?></td>
                      <td><?php echo $row["purpose"]; ?></td>
                      <td><?php echo $row["halltype"]; ?></td>
            </tr>

   <?php
   }
   ?>


  </tbody>
  </table>





   <?php

   }


   }


   if(isset($_POST['id'])&&!empty($_POST['id']))
   {  $id=$_POST['id'];
      $sql="SELECT * FROM `hallentry` WHERE `username`='{$_SESSION['user_name']}' AND `id`='$id'";
      if($sql_run=mysqli_query($conn,$sql))
      {  if(mysqli_num_rows($sql_run)==0)
           {echo '<br>This hall is not booked in your name or the booking is already canceled';
           }
         if(mysqli_num_rows($sql_run)==1)
           { $querry="DELETE FROM `hallentry` WHERE `id`='$id'";
             if($querry_run=mysqli_query($conn,$querry))
             header('Location:halldelete.php');
             else
             echo "Error: " . $querry . "<br>" . mysqli_error($conn);
           }


     }
   }


    ?>


   <form action="halldelete.php" method="POST">
   <br><br>
  Enter the id no of the booking you want to delete.<br><br>
  <input type="text" name="id"> <br><br>
  <input type="submit" value="submit">
  </form>


  </div>



<div id="footer">
</div>

<div id="section">
 To go to hall-homepage
<button onclick="location.href='hall-homepage.php'" class="btn btn-primary">Home</button>

</div>


</body>
</html>