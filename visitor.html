<?php
require 'connect.php';
require 'core.php';
if(!isset($_SESSION["linkedfrom"]))
{
   $_SESSION["linkedfrom"]="";
}
if(isset($_POST['username'])&& isset($_POST['password']))
{
    $username=$_POST['username'];
            $password= $_POST['password'];
      $category="visitor";
        $_SESSION['usertype']=$category;
       $password_hash = md5($password);
      if(!empty($_POST['username'])&& !empty($_POST['password']))
      {
       $query="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hash' AND `usertype`='$category'";

          if($query_run= mysqli_query($conn, $query))
              {
                if(mysqli_num_rows($query_run)==0)
              {
              $_SESSION["linkedfrom"]="Invalid Username / Password combination";
              header("Location:visitor.php");
                 die();
              }
              else
              {   $_SESSION['user_name']=$username;
                $row = mysqli_fetch_assoc($query_run);
               $_SESSION['user_id']=$row['id'];
                   header("Location:visitor-homepage.php");

              }

             }
      }
      }
                     ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visitor Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
	  margin-bottom: 50px;
      border-radius: 0;
    }
	
	
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
    }

	h1 {font-size: 70px}
	
	h2 {font-size: 40px}
	
	p {font-size: 25px }
	
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

<nav class="navbar navbar-inverse" style="height: 90px; font-size: 25px">
  <div class="container-fluid" style="padding-bottom:20px; padding-top:20px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <img src="Logo.png" class="pull-left" height="50px">
      <a class="navbar-brand" href="mainpage.php" style="margin-left: 5px; font-size: 25px">INTEGRATED MANAGEMENT SYSTEM VJTI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

		<li><a href="about">About</a></li>
        <li><a href="contact">Contact us</a></li>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-md-12 text-center">
       <h1>Welcome</h1>

    </div>
    <div class="col-md-12" style="margin-top: 50px; margin-bottom: 50px">
	  <table style="width:100%">
		<tr>
			<td><button type="button" onclick="window.location.href='supervisor.php'" class="btn btn-primary btn-block btn-lg" style="border-radius: 0">Supervisor Login</button></td>
			<td><button type="button" onclick="window.location.href='manager.php'" class="btn btn-primary btn-block btn-lg" style="border-radius: 0">Manager Login</button></td>
			<td><button type="button" onclick="window.location.href='organiser.php'" class="btn btn-primary btn-block btn-lg" style="border-radius: 0">Organiser Login</button></td>
			<td><button type="button" onclick="window.location.href='student.php'" class="btn btn-primary btn-block btn-lg" style="border-radius: 0">Student Login</button></td>
			<td><button type="button" onclick="window.location.href='staff.php'" class="btn btn-primary btn-block btn-lg" style="border-radius: 0">Staff Login</button></td>
			<td><button type="button" class="btn btn-primary btn-block btn-lg active" style="border-radius: 0">Visitor Login</button></td>
		</tr>
	  </table>
    </div>
	<div class="col-md-12" style="margin-top: 50px; margin-bottom: 50px">
	<form class="form-inline" role="form"  action="visitor.php" method="POST">
      <div class="form-group">
        <label for="username" style="font-size: 20px;">Username:</label>
        <input type="username" class="form-control" id="username" name="username" placeholder="Enter username" style="font-size: 20px; margin-right: 10px; margin-left: 10px">
      </div>
      <div class="form-group">
        <label for="pwd" style="font-size: 20px; margin-left: 10px">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" style="font-size: 20px; margin-right: 30px; margin-left: 10px">
      </div>
      <button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-log-in"> </span> Login</button>
           <h3><?php echo '<br>'.$_SESSION["linkedfrom"];
       $_SESSION["linkedfrom"]="";
       ?></h3>
       </form>
	</div>
	<div class="col-md-12 text-left" style="margin-top: 50px;">
            <div class="carosel" id="carosel1">
  <div class="carosel-inner">
    <img class="carosel-item" src="ground.jpg" />
    <img class="carosel-item" src="ground1.jpg" />
    <img class="carosel-item" src="ground2.jpg" />
    <img class="carosel-item" src="ground3.jpg" />
  </div>
</div>
  </div>
</div>

</body>
</html>
