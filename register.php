<?php

require "connect.php";

if(isset($_POST['password'])&& isset($_POST['cpassword'])&&isset($_POST['usertype'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['mobileno'])&&isset($_POST['address'])&&isset($_POST['emailid'])&&isset($_POST['username']))
{
	if(!empty($_POST["password"])&&!empty($_POST["cpassword"])&&!empty($_POST["usertype"])&&!empty($_POST["firstname"])&&!empty($_POST["lastname"])&&!empty($_POST["mobileno"])&&!empty($_POST["address"])&&!empty($_POST["emailid"])&&!empty($_POST["username"]))
	{
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];

		if($password==$cpassword)
		{       $username=$_POST["username"];
			$emailid=$_POST["emailid"];
			$firstname=$_POST["firstname"];
			$lastname=$_POST["lastname"];
			$mobileno=$_POST["mobileno"];
			$address=$_POST["address"];
			$usertype=$_POST["usertype"];
			$password_hash=md5($password);
			switch($usertype)
			{
			 case "student": $redir="student.php";$table_name="users";break;
                   case "staff": $redir="staff.php"; $table_name="staff"; break;
                   case "visitor": $redir="visitor.php"; $table_name="visitor";break;

                   default:echo 'invalid input';exit();break;

			}
			$sql = "INSERT INTO $table_name(id,firstname,lastname,mobileno,emailid,address,username,password) VALUES ('','$firstname','$lastname','$mobileno','$emailid','$address','$username','$password_hash')";
			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully.";
			    header('Location:index.php');
   

      			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
?>

<!DOCTYPE html>
<html>
<style>

 #header
  {
  font-family:Times New Roman;
  background-color:black;
  color:white;
  text-align:center;
  padding:10px;

  }

   #nav
    {
    background-color:grey;
    color:black;
    height:700px;
    width:100px;
    float:left;
    font-family:Times New Roman;
    padding:10px;
    }

    #section
    {
     color:black;
     height:700px;

     width:350px;
     padding:10px;
     text-align:center;

     }

       a:link {
    background-color:#cc99cc;
    padding:5px;
    color:black;
    text-decoration:none;
    }

    a:hover {
    background-color:black;
    color:white;
    font-weight:bold;
    text-decoration:none;
    }

    a:visited {
    background-color:#0808cc;
    font-decoration:none;
    color:white;
    }


    #footer
    {
     background-color:black;
     color:white;
     font-family:Verdana;
     padding:20px;
     text-align:center;
    }

    body
    {
     background-image:url("VJTI-LOGO-1.gif");
     background-size:300px 300px;
     background-position:center;
     background-repeat:no-repeat;
    }
</style>
<body>
 <div id="header">
<h1> REGISTER HERE ! </h1>
</div>

<div id="nav">
  <strong> Enter all details <strong> <br><br>
  </div>

<div id="section">
<form action="register.php"  method="POST">

 User  :
  <select name="usertype">
   <option value="student"> Student </option>
   <option value="staff"> Staff </option>
   <option value="visitor"> Visitor </option>
   </select>   <br><br>
   First name :
   <input type="text" name="firstname" maxlength="30" ><br><br>
   Last name :
   <input type="type" name="lastname" maxlength="30" > <br><br>
  Username :
  <input type="text" name="username" maxlength="30" > <br><br>
  Password :
  <input type="password" name="password" > <br><br>
Contact No.
<input type="text" name="mobileno" maxlength="11"><br><br>
Email id:
	<input type="text" name="emailid" maxlength="30"><br><br>
 Address:<textarea name="address" rows="6" cols="30"></textarea> <br><br>
    Confirm Password :<br>
    <input type="password" name="cpassword" > <br><br>
  <input type="submit" value="Submit" > <br><br>
  </form>

     To go back to the main page :<br><br>
  <a href="index.php"> BACK </a>
  </div>

<div id="footer">
</div>

</body>
</html>
