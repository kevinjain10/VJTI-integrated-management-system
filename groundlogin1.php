  <?php
require 'connect.php';
ob_start();
session_start();

if(isset($_POST["confirmation"]))
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
  <strong><u>Ground</u><strong> <br><br>
  Cricket <br><br>
  Football<br><br>
  </div>

 <div id="section">
 <h2>Welcome <?php echo $_SESSION['user_name']; ?></h2>
 <br><br><br><br>
 Bookings are available. Are you sure you want to book?
 <form action="groundlogin1.php" method="POST">
 <br>
 <select name="confirmation">
 <option value="confirm">Confirm</option>
 <option value="cancel">Cancel</option>
 </select><br>
 <br>
 <input type="submit" name="submit" value="Go"> <br><br>
 </form>

  </div>

 <div id="footer">
</div>

<div id="section">
<button onclick="goBack()">Go Back</button>
       <script>
       function goBack() {
       window.history.back();
       }
       </script>
</div>

</body>
</html>






































