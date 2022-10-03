<?php
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}
 include('partials/menu.php');
 ?> 

<!-- Main content section starts here -->
        <div class= "main-content text-center">
        <div class= "wrapper">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <br><h2> This is the admin panel of TopWomen</h2><br>
</div>
</div>
<!-- Main content section ends here -->
<div class= "admin-panel text-center">
<div class= "wrap">
        <h1><p class ="text-center"> </p> </h1>
        <h3><p class ="text-center">Welcome admin! <?php echo $_SESSION['admin_name'];?></p></h3><br>
        </div>
        </div>
<?php include('partials/footer.php')?>  