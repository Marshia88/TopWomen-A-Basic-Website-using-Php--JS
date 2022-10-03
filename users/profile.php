<?php  include('../config/constants.php');  ?>
<html>
<head>
<title> TopWomen </title>
<link rel= "stylesheet" href= "../css/admin.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-color:powderblue;">
<!-- Menu section starts here -->
    <div class= "menu menu-center">
        <div class= "wrapup">
            <h3 id="nothing" style="color: white; font-family:Josefin Sans;">Top Women</h3>
            <ul>
                <li style="font-size:20px"><a style="color: white; font-family:Josefin Sans;" href="index.php">Home</a></li>
                <li style="font-size:20px"><a style="color: white; font-family:Josefin Sans;" href="feed.php">Profiles</a></li>
				<li style="font-size:20px"><a style="color: white; font-family:Josefin Sans;" href="contact.php">Contact us</a></li>
                <li style="font-size:20px"><a style="color: white; font-family:Josefin Sans;" href="logout.php">Log out</a></li>
        </ul>
		<br>
        </div>
</div>
<br>

<section class="my-5" >

               <?php
					 $serial= $_GET['id'];
		            $sql= "SELECT *FROM women WHERE id ='$serial'";  
				    $res=mysqli_query($conn, $sql);
				      if($res== TRUE)
				     {
					    $count= mysqli_num_rows($res);  	
					if($count>0)
					{
				      while($rows= mysqli_fetch_assoc($res))  
				      {
					     ?>
    <div class="py-5">

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-12" >
            <br><br>

                <img src=<?php echo $rows['image'] ?> class="img-fluid aboutimg"  alt="Entreprenuers Image" style="box-shadow: 5px 5px LightBlue">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
            <h2 style="color: darkblue; font-family:Josefin Sans;">Hi! My name is <?php echo $rows['name'] ?>.</h2><br>
                <h3 style="font-family:Josefin Sans;"class="display-4">I am <?php echo $rows['age'] ?> 
                years old and currently the owner of a business I started myself in <?php echo $rows['startyear']?> called <?php echo $rows['business']?>. </h3>

                <br>
                <p style="font-family:Josefin Sans; font-size:18px;"> <?php echo $rows['aspirations'] ?> </p><br>

                <h3 style="color: steelblue; font-family:Josefin Sans;">Wanna know what inspired me and what I aspire to do in the future?</h3>

                <p style="font-family:Josefin Sans; font-size:18px;"> <?php echo $rows['details'] ?> </p><br>

                <h4 class="py-3"><p style= "font-family:Josefin Sans; color: black">Contact:</p></h4>
						<h5><p style= "font-family:Josefin Sans;">Email:<?php echo $rows['email'] ?></p></h5>
						<h5><p style= "font-family:Josefin Sans;">Social Media:<?php echo $rows['socialmedia'] ?></p></h5>
						<h5><p style= "font-family:Josefin Sans;">Linkedin:<?php echo $rows['linkedin'] ?></p></h5>

                        <br>

                        <h4><p style= "font-family:Josefin Sans; color: black">For business or personal queries and any kind of collaborations, comment below!</p></h4><br>
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




</section>

<hr style="height:2px;border-width:0;color:gray;background-color:powderblue">

	<div class="second-content">

	<div class="wrapper">

            
  <h2 style="text-align:center;"><a href="#" style="font-family:Josefin Sans; color: CadetBlue;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Chat Space</a></h2>
  <br><br>
  <div class="container" style="background-color: aliceblue; box-shadow: 5px 5px 5px LightBlue">
  <br>
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
  </div>
  </div>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
		</div>
		</div>
<?php include('partials/footer.php'); ?>

                

             