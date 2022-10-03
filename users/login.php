<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
	  <title>Admin Login </title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
        crossorigin="anonymous"> 
      <link rel ="stylesheet" type="text/css" href="style.css"> 
 </head>
      <body>
      	<div id="form">
      		<form action="process.php" method="POST">
      			
				<div class="form-group">
					<label >Username:</label>
      				<input type="text" class="form-control" id="user" name="user" placeholder="Enter Username"/>
				</div>
      				
      			
      			<div class="form-group">
      				<label>Password:</label>
      				<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password"/>
      			</div>
      			
				<button type="submit" id="btn" class="btn btn-primary" allign="left">Login</button>
      				<!-- <input type="submit" id="btn" class="btn btn-primary" value="Login" /> -->
				
				<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
      		</form>
        </div>
      </body>
 </html>
 <?php
    unset($_SESSION["error"]);
?>