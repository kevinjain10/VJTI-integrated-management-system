

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

  <?php

            if(isset($_POST['username'])&& isset($_POST['password'])&&isset($_POST['category']))
            { $username=$_POST['username'];
              $password= $_POST['password'];
              $category=$_POST['category'];
              $password_hash = md5($password);
              if(!empty($_POST['username'])&& !empty($_POST['password'])&&!empty($_POST['category']))
             { $redir="student-homepage.php";
               switch($category)
              {
                   case "Student": $redir="student-homepage.php";$table_name="users";break;
                   case "Staff": $redir="staff.php"; $table_name="staff"; break;
                   case "Visitor": $redir="visitor.php"; $table_name="visitor";break;
                   case "Supervisor": $redir="supervisor.php";$table_name="modifier";break;
                   case "Manager": $redir="manager.php"; $table_name="modifier";break;
                   case "Organiser": $redir="organiser.php";$table_name="modifier";break;
                   default:echo 'invalid input';exit();break;
              }

                 $query="SELECT `id` FROM `$table_name` WHERE `username`='$username' AND `password`='$password_hash'";

              if($query_run= mysqli_query($conn, $query))
              {
                if(mysqli_num_rows($query_run)==0)
              echo '<br>Invalid username/password combination';
              else if( mysqli_num_rows($query_run)==1)
              {   $_SESSION['user_name']=$username;
                $row = mysqli_fetch_assoc($query_run);
               $_SESSION['user_id']=$row['id'];
                   header("Location:$redir");
                }
              }

              else
              { echo 'not ok';
              }


              }else
             { echo '<br>Please fill in all details';}
            }
 ?>










<form action="<?php  $currentfile;?>" method="POST">
<br><br><br>
 User  :
  <select name="category">
   <option value="Student"> Student </option>
   <option value="Staff"> Staff </option>
   <option value="Visitor"> Visitor </option>
   <option value="Supervisor"> Supervisor </option>
   <option value="Manager"> Manager </option>
   <option value="Organiser"> Organiser </option>
   </select>   <br><br><br>
  Username :   <br><br>
  <input type="text" name="username"> <br><br>
  Password :<br><br><input type="password" name="password"> <br><br>
  <input type="submit" value="submit"> <br><br>
  </form>
     If new user please register first :<br><br>
  <A HREF="register.php">    REGISTER </A>
  </div>

<div id="footer">
</div>

</body>
</html>