<?php include('../config/constants.php') ?>
<html>
<head>
<title> TopWomen </title>
<link rel= "stylesheet" href= "../css/admin.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
  <a class="navbar-brand" href="index.php"><h4>TopWomen</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" id="nav">
      <li class="<?php if($page=='home'){echo 'active';}?>">
        <a class="nav-link" href="index.php"><h5>Home</h5></a>
      </li>
      <li class="<?php if($page=='entreprenuers'){echo 'active';}?>">
        <a class="nav-link" href="instructors.php"><h5>Requests</h5></a>
      </li>
      <li class="<?php if($page=='notifications'){echo 'active';}?>">
        <a class="nav-link" href="feed.php"><h5>Profiles</h5></a>
      </li>
      <li class="<?php if($page=='notifications'){echo 'active';}?>">
        <a class="nav-link" href="messages.php"><h5>Messages</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><h5>Log out<h5></a>
      </li>
    </ul>
  </div>
</nav>