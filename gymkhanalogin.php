<?php
require 'connect.php';
ob_start();
session_start();

  /*if(isset($_POST["confirmation"]))
    if($_POST["confirmation"]=="confirm")
    {
     $queri="INSERT INTO `hallentry`(`id`,`slotno`,`date`,`username`,`purpose`,`halltype`)
     VALUES('','{$_SESSION['slotno']}','{$_SESSION['date']}','{$_SESSION['user_name']}','{$_SESSION['purpose']}','{$_SESSION['type']}')";
        if(mysqli_query($conn,$queri))
         {
          header('Location:hallbookingsuccess.php');
         	}
                  else {
     	  	 echo "Error: " . $queri . "<br>" . mysqli_error($conn);
    	              }
     }
     
     */

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
<p style="text-align:right;"><a href="logout.php" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-log-out"></span> Log out</a></p>
</div>


<div id="nav">
  <strong><u>Gymkhana</u><strong> <br><br>
  Chess<br><br>
  Carrom<br><br>
  Table Tennis<br><br>
  </div>

 <div id="section">
<form action="gymkhanalogin.php" method="POST">
/*<?php
echo 'Date';
$t=time();
echo date("Y-m-d",$t);
?> */
 <br><br>
Time slot:
 <select name="time">
   <option value="1">9-10</option>
   <option value="2">10-11</option>
   <option value="3">11-12</option>
    <option value="4">12-1</option>
   <option value="5">2-3</option>
   <option value="6">3-4</option>
   <option value="7">4-5</option>
   <option value="8">5-6</option>
   </select>   <br><br>

Type of the game and table number:<br>
 <select name="game">
   <option value="chess1">chess 1</option>
   <option value="chess2">chess 2</option>
   <option value="chess3">chess 3</option>
   <option value="carrom1">carrom 1</option>
   <option value="carrom2">carrom 2</option>
   <option value="carrom3">carrom 3</option>
   <option value="tt1">tt 1</option>
   <option value="tt2">tt 2</option>
   <option value="tt3">tt 3</option>
  </select>   <br><br>


<input type="submit" value="submit">
</form>


<?php
if(isset($_POST['game'])&& isset($_POST['time']))
 { if(!empty($_POST['game'])&&!empty($_POST['time']))
    { $slotno=$_POST['time'];
      $game=$_POST['game'];

        switch($slotno)
        { case 1:$time='09';break;
          case 2:$time='10';break;
          case 3:$time='11';break;
          case 4:$time='12';break;
          case 5:$time='14';break;
          case 6:$time='15';break;
          case 7:$time='16';break;
          case 8:$time='17';break;
          default: echo 'invalid input';break;
        }




      $query="SELECT * FROM `gymkhana` WHERE `slotno`='$slotno' AND `username`='{$_SESSION['user_name']}'";

  if($query_run=mysqli_query($conn,$query))
     {

       if(mysqli_num_rows($query_run)==0)
         {
             $_SESSION['slotno']=$slotno;
             $t=time();
             $_SESSION['game']=$game;
             date_default_timezone_set('Asia/Calcutta');


             if($time>date('H',$t))

             {
            $quer="SELECT * FROM `gymkhana` WHERE `slotno`='$slotno' AND `game`='$game'";
                  if($querii_run=mysqli_query($conn,$quer))
                  {
                     if(mysqli_num_rows($querii_run)==0)
                     {
                     header('Location:gymkhanalogin1.php');
                     }

                     else if(mysqli_num_rows($querii_run)==1)
                     {echo 'This game table has already been booked for this time slot.';
                     }

                  }
             }

             else
             {
               echo 'Please enter a valid date and time';
             }
             

                }


              else if(mysqli_num_rows($query_run)==1)
              {
                echo 'One table has already been booked by this user for this time slot.<br> Only one table can be booked per user per timeslot';

              }
              
     }
     
     
    }
    else
    {
      echo 'enter all details';
    }
 }

 ?>


       <button onclick="goBack()">Go Back</button>
       <script>
       function goBack() {
       window.history.back();
       }
       </script>


  </div>



 <div id="footer">
</div>

</body>
</html>
