<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopWomen</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body style="background-color:powderblue" >
<?php $page = 'contact'; include('partials/menu.php'); ?> 
  <div class="main-content" style="background-image: url('W11.jpg');">
  <h1 style="text-align: center;">Contact us at <a href="#" style="color:navy;">topwomen@ac.bd</a></h1>
  <br>
  <p style="text-align: center;">Or you can give us a feedback by filling up the following form.</p>
</div>
<div class="jumbotron">
<section class="my-2">
<div class="py-2">
</div>
<div class="w-50 m-auto">
    <form action="userinfo.php" method="post" >
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocapitalize="off" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" autocapitalize="off" class="form-control">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" autocapitalize="off" class="form-control">
        </div>
        <div class="form-group">
            <label>Comments</label>
            <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</section>
</div>
<br>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>
<?php include('partials/footer.php'); ?>