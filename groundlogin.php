<?php
require 'connect.php';
ob_start();
session_start();

 /* if(isset($_POST["confirmation"]))
    if($_POST["confirmation"]=="confirm")
    {
     $queri="INSERT INTO `groundentry`(`id`,`slotno`,`date`,`username`,`purpose`,`groundtype`)
     VALUES('','{$_SESSION['slotno']}','{$_SESSION['date']}','{$_SESSION['user_name']}','{$_SESSION['purpose']}','{$_SESSION['type']}')";
        if(mysqli_query($conn,$queri))
         {
          header('Location:groundbookingsuccess.php');
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
  <strong><u>Ground</u><strong>  <br> <br>
  Cricket<br> <br>
  Football<br><br>
  </div>

 <div id="section">
<form action="groundlogin.php" method="POST">
Date:<br>
<input type="date" name="date"><br><br>
Time slot:
 <select name="time">
   <option value="1">7-10</option>
   <option value="2">10-1</option>
   <option value="3">2-4</option>
    <option value="4">5-7</option>
     <option value="5">8-11</option>
   </select>   <br><br>

Purpose:<br>
<textarea name="purpose" rows="6" cols="30"></textarea> <br><br>
Type of Ground:<br>
 <select name="groundtype">
   <option value="cricket">cricket</option>
   <option value="football">football</option>
  </select>   <br><br>

<input type="submit" value="submit">
</form>
<?php
if(isset($_POST['date'])&& isset($_POST['time'])/*&&isset($_POST['username'])*/&&isset($_POST['purpose'])&&isset($_POST['groundtype']))
 { if(!empty($_POST['date'])&&!empty($_POST['time'])/*&&!empty($_POST['username'])*/&&!empty($_POST['purpose'])&& !empty($_POST['groundtype']))
    { $slotno=$_POST['time'];
      $date=$_POST['date'];
      $type=$_POST['groundtype'];
      //$username=$_POST['username'];
        $purpose=$_POST['purpose'];
        switch($slotno)
        { case 1:$time='07';break;
          case 2:$time='10';break;
          case 3:$time='14';break;
          case 4:$time='17';break;
           case 5:$time='20';break;
          default: echo 'invalid input';break;
        }

      $query="SELECT * FROM `groundentry` WHERE `date`='$date' AND `slotno`='$slotno' AND `groundtype`='$type'";

  if($query_run=mysqli_query($conn,$query))
     {
       if(mysqli_num_rows($query_run)==0)
             {
             $_SESSION['slotno']=$slotno;
             $_SESSION['date']=$date;
            // $_SESSION['username']=$username;
            $_SESSION['purpose']=$purpose;
             $_SESSION['type']=$type;

             $t=time();
           //  date_default_timezone_set("Asia/India");
           date_default_timezone_set('Asia/Calcutta');


             if($_SESSION['date']>(date("Y-m-d",$t))||($_SESSION['date']==(date("Y-m-d",$t))&& $time>date('H',$t)))

             {   
                   header('Location:groundlogin1.php');
             }

             else
             {
               echo 'Please enter a valid date and time';
             }
                }


              else if(mysqli_num_rows($query_run)==1)
              {
                echo 'Sorry this slot is already booked.Select another slot.';

              }



    }
    else
    {
      echo 'enter all details';
    }
 } }

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
