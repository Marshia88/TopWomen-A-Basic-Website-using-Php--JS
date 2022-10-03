<?php include('../config/constants.php') ?>
<html>
<head>
<title> TopWomen </title>
<link rel= "stylesheet" href= "../css/admin.css">
<link rel="stylesheet" href="css/style.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
  <a class="navbar-brand" href="index.php"><h4>Top Women</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" id="nav">
      <li class="<?php if($page=='home'){echo 'active';}?>">
        <a class="nav-link" href="index.php"><h5>Home</h5></a>
      </li>
      <li class="<?php if($page=='feed'){echo 'active';}?>">
        <a class="nav-link" href="feed.php"><h5>Profiles</h5></a>
      </li> 
      <li class="<?php if($page=='Live'){echo 'active';}?>">
        <a class="nav-link" href="Live.php"><h5>Live Session</h5></a>
      </li>    
      <li class="<?php if($page=='contact'){echo 'active';}?>">
        <a class="nav-link" href="contact.php"><h5>Contact us</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><h5>Log out<h5></a>
      </li>
      <li class="<?php if($page=='notifications'){echo 'active';}?>">
        <h5>
        <div class="icon" onclick="toggleNotifi()">
		<img src="images/bell.png" alt=""><span>!</span>
		</div>
         
		<div class="notifi-box" id="box">
    <br>
    <h2>Notifications</h2>
			<div class="notifi-item">
				<div class="text">
				   <h4>Maria</h4>
				   <p>Maria commented "Best of luck for your business!"</p>
			    </div> 
			  </div>
			<div class="notifi-item">
				<div class="text">
				   <h4>Azwaad</h4>
				   <p>Azwaad commented "Do you want to collaborate with me?"</p>
			</div> 
			</div>
			<div class="notifi-item">
				<div class="text">
				   <h4>Ira</h4>
				   <p>Ira commented "I want to be like you too!"</p>
		    </div> 
			</div>
	</nav>
	<script src="js/script.js"></script>
        </h5>
        </li>
    </ul>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--<script type="text/javascript" src="js/nav.js"></script> -->
</body>
</html>