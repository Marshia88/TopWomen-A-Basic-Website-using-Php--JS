<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Women</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


</head>
<body>
<?php $page = 'home'; include('partials/menu.php'); ?> 
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
    <div class="carousel-item active">
         <img src="images/a3.png" alt="Women" width="1000" height="500">
            <div class="carousel-caption">
            <h1 style="color: white;
  text-shadow: 4px 4px 6px #000000;"><b>Welcome to Top Women</b></h1>
            <h5><p style=" color: yellow;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">A platform where women entrepreneurs of Bangladesh connect with its people</p></h5>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="images/c11.jpg" alt="Teamwork" width="1000" height="500">
      <div class="carousel-caption">
        <h3 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;"><b>Acknowledgment of self-worth and room for improvement</b></h3>
        <h5><p style=" color: darkblue;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">When women support eact other, incredible things happen</p></h5>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="images/c1.jpg" alt="Skills" width="1000" height="500">
      <div class="carousel-caption">
        <h3 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;"><b>We are for Women Entreprenuers</b></h3>
        <h5><p style=" color: darkblue;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Boost yourself with the magnetic guidance of the best minds</p></h5>
      </div>   
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center" style="color:indigo;">About Us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/c26.jpg" class="img-fluid aboutimg"></div>
            <div class="col-lg-6 col-md-6 col-12">
                <h3 class="display-4"> Hello there! A very warm welcome to Top Women</h3>
                <p class="py-3"> With the purpose of connecting  women with their role models of the same gender, our aim is to form a connection between the aspiring and successful women by providing a platform for women to boost their career growth by sharing their experiences and businesses' ideas with others. Although the 21st century can be considered as a century of equity, the fact that women have evolved as a minority community in major work fields cannot be denied. When the members of a disadvantaged group step on the aisle of achievement, they are often looked up to as parameters of success. Women in the society, who have taken steps to develop themselves by the means of small courses or businesses get to share their lives with others, and help every other woman become a resource to society. The main motive is to provide a platform for women to showcase their skills and share their journey in the way of becoming an entrepreneur.</p>
                </div>
        </div>
    </div>
</section>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--<script type="text/javascript" src="js/nav.js"></script> -->
</body>
</html>
<?php include('partials/footer.php'); ?>