<?php

  require 'core.php';

  
   if(loggedin())
  {           //echo $_SESSION['user_name'];
              //echo '<a href="logout.php">log out</a>';
              
  session_destroy();
  header('Location: index.php');
  }
  else
     {
  include 'login.php';
     }


?>
