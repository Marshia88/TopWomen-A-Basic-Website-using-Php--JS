<?php 
    include('../config/constants.php'); 
    $name= $_GET['id'];
    $sql= "DELETE FROM userinfodata WHERE id ='$name'";
    $res=mysqli_query($conn, $sql);
    if($res==TRUE){
        echo "<script>alert('Info Deleted Successfully!');
        window.location.href = 'messages.php';
        </script>";
    }else{
        echo "<script>alert('Info Could Not Be Deleted. Please Try Again.');
        window.location.href = 'messages.php';
        </script>";
    }
    ?>