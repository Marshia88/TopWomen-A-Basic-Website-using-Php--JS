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
<body style="background-color:powderblue;">
<?php $page = 'feed'; include('partials/menu.php'); ?> 

	<div class="extra-content" style="background-image: url('W11.jpg');">
		<div class="wrapper">
	<h3><p class="text-center"><b>Get to know the female innovators of our country!</b></p> </h3>
	<h5><p class="text-center" style="color: black">If you are an entreprenuer and want your story to be published on our site, click the button below, fill up the form & inspire others.</p> </h5>
    <br><br>
	<a href= "add-instructor.php"  class ="btn btn-primary">Publish your own story</a>
    <br>
	</div>
	</div>
      <section id="x">
	  <div class="second-content" >
		<div class="wrapper">
		<div class= "container py-5">
					<div class="row">
		<?php
		$sql= "SELECT *FROM women";  
		$res=mysqli_query($conn, $sql);
		if($res== TRUE)
		{
			$count= mysqli_num_rows($res);  	
			if($count>0)
			{
				while($rows= mysqli_fetch_assoc($res))  
				{
					?>
					<div class= "col-md-3 mt-3">
                    <div class="card" style="box-shadow: 5px 10px lightgrey;">
					<a href='profile.php?id=<?php echo $rows['id']; ?>'><img src="../Images/<?php echo $rows['image']; ?>" class="card-img-top" height=280px width=200px alt="Entreprenuers Image"></a>
				      <div class="card-body">
					    <h4 class= "card-title"><p style="color:#414244"> <?php echo $rows['name']; ?></p></h4>
					    <p class= "card-text">Owner of <?php echo $rows['business']; ?></p>
						<?php
						echo "<td > <a href='profile.php?id=$rows[id]' ><input type='submit' value='View Profile' class= 'btn btn-success' ></a> </td>";
						?>
						<br>
				      </div>
				   </div>
				   </div>
	
					<?php
					
				}
			}
			else{
				echo "No info of a person found!";
			 }
		}
		?>
		 </div>
				   </div>
	    </div>
	</div>
	  </section>

<?php include('partials/footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>