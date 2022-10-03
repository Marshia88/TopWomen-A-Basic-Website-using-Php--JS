<?php include('partials/menu.php'); ?> 
	<div class="main-content">
		<div class="wrapper">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<h2><p class="text-center">Submitted info waiting for being published.</p> </h2>
	<br><br><br><br><br>

	<table class="tbl-full">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Business Name</th>
			<th>Starting Year</th>
			<th>Business Details</th>
			<th>Aspirations</th>
			<th>Email</th>
			<th>Page/Group Link</th>
			<th>Linkedin</th>
			<th>Image</th> 
			<th>Actions</th>
		</tr>
		<?php 
		$sql= "SELECT *FROM women"; 
		$res=mysqli_query($conn, $sql);  

		if($res== TRUE)
		{
			//count rows to check whether there is data in database
			$count= mysqli_num_rows($res);  //func to get all rows in database	
			if($count>0){
				//there is data in database
				while($rows= mysqli_fetch_assoc($res))  //fetches data from database to $rows
				{
					//runs as long as there is data in database
					echo '<tr>'; 
                    echo "<td>" .$rows['name']. "</td>";
                    echo "<td>" .$rows['age']. "</td>";
					echo "<td>" .$rows['business']. "</td>";
					echo "<td>" .$rows['startyear']. "</td>";
					echo "<td>" .$rows['details']. "</td>";
					echo "<td>" .$rows['aspirations']. "</td>";
					echo "<td>" .$rows['email']. "</td>";
					echo "<td>" .$rows['socialmedia']. "</td>";
					echo "<td>" .$rows['linkedin']. "</td>";
					echo "<td>" .$rows['image']. "</td>";
					echo "<td> <a href='delete-someone.php?name=$rows[name]' ><input type='submit' value='Delete' class= 'btn btn-primary' style='background-color: #f54d5b' ></a>
					<br><br> <a href='verify-someone.php?name=$rows[name]' ><input type='submit' value='Verify' class= 'btn btn-secondary' style='background-color:#0275d8; 
					text-decoration: none;
					font-weight: bold;
					color: solid white;
					margin-left: 80%;'></a> </td>";
					echo '</tr>';			
		?>				   
			<?php
				}
			}
			else{
				echo "No Data!";
			 }
		}
		?>
	</table>
	</div>
	</div>
<?php include('partials/footer.php'); ?>