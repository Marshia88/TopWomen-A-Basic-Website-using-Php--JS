<?php include('partials/menu.php'); ?> 
	<div class="main-content">
		<div class="wrapper">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<h2><p class="text-center">These are the messages submitted through the "Contact Us" page.</p> </h2>
	<br><br><br><br><br>

	<table class="tbl-full">
		<tr>
            <th>Username</th>
            <th>Email</th>
            <th>Mobile</th>
			<th>Comments</th> 
			<th>Actions</th>
		</tr>
		<?php 
		$sql= "SELECT *FROM userinfodata";  
		$res=mysqli_query($conn, $sql);  //executes query

		//checks whether executed
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
                    echo "<td>" .$rows['user']. "</td>";
                    echo "<td>" .$rows['email']. "</td>";
                    echo "<td>" .$rows['mobile']. "</td>";
                    echo "<td>" .$rows['comments']. "</td>";
					echo "<td> <a href='delete-message.php?id=$rows[id]' ><input type='submit' value='Delete' class= 'btn btn-danger' style='background-color: #f54d5b' ></a> </td>";
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