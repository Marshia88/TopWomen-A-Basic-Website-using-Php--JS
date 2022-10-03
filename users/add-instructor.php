<?php include('partials/menu.php'); ?> 

<div class="second-content ">
    <div class="wrapper">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<h3><p style="color:#202325">Insert Necessary Information About Yourself And</p> </h3>
<h2><p style="color:#133d6d">Join Our Community</p> </h2>
<p style="color:#202325"><b>You must wait for verification from our admins in order to sucessfully publish your story of entreprenuership in our site. Until then, please be patient.</b></p>
<br><br>

<?php 

	if(isset($_SESSION['add'])){   //checks whether session is set or not
		echo $_SESSION['add'];  //displays session message
		unset($_SESSION['add']); //removes session message
    }
?>
<form action="" method="POST" enctype="multipart/form-data">
    <table class="tbl-30">
        <tr>
                <td>Name: </td>
                <td><input type= "text" name="name" placeholder="Enter your name"></td>
        </tr>
        <tr>
                <td>Age: </td>
                <td><input type= "text" name="age" placeholder="Enter your age"></td>
        </tr>
        <tr>
                <td>Business name: </td>
                <td><input type= "text" name="business" placeholder="Tell us your business name"></td>
        </tr>
        <tr>
                <td>Starting year: </td>
                <td><input type= "text" name="startyear" placeholder="Tell us when you started"></td>
        </tr>
        <tr>
                <td>Short details about your business: </td>
                <td><input type= "text" name="details" placeholder="Explain in short about what you do"></td>
        </tr>
        <tr>
                <td>Aspirations: </td>
                <td><input type= "text" name="aspirations" placeholder="Tell us what inspired you."></td>
        </tr>
        <tr>
                <td>Contact Email: </td>
                <td><input type= "text" name="email" placeholder="Provide your email"></td>
        </tr>
        <tr>
                <td>Facebook or any social media page/group link (If any): </td>
                <td><input type= "text" name="socialmedia" placeholder="Social media business page"></td>
        </tr>
        <tr>
                <td>Linkedin profile (If any): </td>
                <td><input type= "text" name="linkedin" placeholder="Provide your Linkedin profile link"></td>
        </tr>
        <tr>
                <td>Profile image (Optional): </td>
                <td><input type= "file" name="image"></td>
        </tr>
        <br>
        <tr>
        <td colspan= "2">
                <input type ="submit" name="submit" value="Submit" class="btn-third">
        </td>
        </tr>
   </table>
</form>

<?php 

if(isset($_POST['submit'])){
      $name= $_POST['name'];
      $age= $_POST['age'];
      $business= $_POST['business'];
      $startyear= $_POST['startyear'];
      $details= $_POST['details'];
      $aspirations= $_POST['aspirations'];
      $email= $_POST['email'];
      $socialmedia= $_POST['socialmedia'];
      $linkedin= $_POST['linkedin'];

      if(isset($_FILES['image']['name']))
      {   
         $image=$_FILES['image']['name'];
         $source_path=$_FILES['image']['tmp_name'];
         $destination_path="../images/".$image;
         $inst=true;

         $upload=move_uploaded_file($source_path,$destination_path);

         //check whether img is uploaded or not. if not, we stop the process and redirect with erroe msg

         if($upload==false)
         {
                echo "<script>alert('Your image was not added. Try again.');
                window.location.href = 'add-instructor.php';
                </script>";
                die();

         }
      }
      else
      {
        //dont upload image and set image name value as blank
        $image="";
      }
      
      $stmt= "INSERT INTO women SET
       name = '$name',
       age= '$age',
       business= '$business',
       startyear= '$startyear',
       details= '$details',
       aspirations= '$aspirations',
       linkedin= '$linkedin',
       email= '$email',
       image= '$image',
       socialmedia= '$socialmedia'
       ";
    $res = $conn->query($stmt);

    if($res== TRUE)
    {
         $_SESSION['add']="Your information has been submitted successfully!";
        
        echo "<script>alert('Your information has been submitted successfully!');
        window.location.href = 'add-instructor.php';
        </script>";
    }
    else{
        $_SESSION['add']="Failed To Add Info. Try again."; 
        echo "<script>alert('Failed To Add Info. Try again.');
        window.location.href = 'add-instructor.php';
        </script>";
    }
}
?>
</div>
</div>
<?php include('partials/footer.php'); ?>