<?php 
   session_start();
   
   $con = mysqli_connect("localhost","root","","topwomen"); 
   
   $username =$_POST['user'];
   $password =$_POST['pass'];
   $error = "Incorrect login information";

   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($con, $username);
   $password = mysqli_real_escape_string($con, $password);

   $result =mysqli_query($con, "select * from users where user_name ='$username' and password ='$password'") or 
   die ("Failed to query database".mysql_error());
   $num = mysqli_num_rows($result);
   
   if($num==1){
      $_SESSION['admin_name'] = $username;
      header('location:index.php');
      } else  {
         $_SESSION["error"] = $error;
         header('location:login.php');
      }

   ?>


