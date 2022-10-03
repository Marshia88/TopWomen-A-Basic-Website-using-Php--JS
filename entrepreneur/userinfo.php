<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Succesful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'topwomen');  

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comments) values ('$user', '$email', '$mobile', '$comments') ";

echo "$query";

$res=mysqli_query($con, $query);

// header('location:contact.php');
 
    if($res== TRUE)
    {
         $_SESSION['add']="Thank you for sharing your thoughts.";
        echo "<script>alert('Thank you for sharing your thoughts.');
        window.location.href = 'contact.php';
        </script>";
    }
    else{
        $_SESSION['add']="Something went worng. Please try again."; 
        echo "<script>alert('Something went worng. Please try again.');
        window.location.href = 'add-fooditem.php';
        </script>";
    }
?>