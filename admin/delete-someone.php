<?php 
    include('../config/constants.php'); 
    $name= $_GET['name'];
    $sql= "DELETE FROM women WHERE name ='$name'";
    $res=mysqli_query($conn, $sql);
    if($res==TRUE){
        echo "<script>alert('Info Deleted Successfully!');
        window.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>alert('Info Could Not Be Deleted. Please Try Again.');
        window.location.href = 'index.php';
        </script>";
    }
    ?>