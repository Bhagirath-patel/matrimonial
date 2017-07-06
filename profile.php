<html>
<head></head>
<body>
   
	<?php 
	       $email=$_COOKIE["email"];               // retrieve cookie ( email id)
			                                    //$email=$_POST["email"];
		   $img=$email.".jpg";                  // teja@tzn.com.jpg
			$target = "pro/";                   //  pro/teja@tzn.com.jpg
			$target = $target . $img;           //  pro/teja@tzn.com.jpg
			                                    //$pic=($_FILES['photo']['name']);
			$size=($_FILES['photo']['size']);
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			 { 
				//echo "The file ". basename( $_FILES['photo']['name']). " $size has been uploaded, and your information has been added to the directory"; 
			} 
			else 
			{ 
				 echo "Sorry, there was a problem uploading your file.";
			} 
?> 
<div><img src="pro/bhagi@gmail.com.jpg" width=200 height=300 title="BHAGIRATH" style="margin:20px"></img></div>

<form enctype="multipart/form-data" action="profile.php" method="POST">
<?php /*Email<input type="email" name="email" required="required" /><br />*/ ?>
<input type="file" name="photo"><br> 
<input type="submit"></form>
<?php
    include("database.php");
	
	if(!isset($_COOKIE["email"])){
		header("location:login.php");
	}
	else{
		$email=$_COOKIE["email"];
		$rs=mysql_query("select * from login where email='$email'");
		while($r=mysql_fetch_array($rs)){
		echo $r[0]."<br>".$r[2]."<br>".$r[3]."<br>".$r[4]."<br>".$r[5]."<br>".$r[6]."<br>".$r[7]."<br>".$r[8]."<br>".$r[9]."<br>".$r[10]."<br>";
	
		}
	}
	?>
		<a href="edit.php">Edit Profile</a>
		<a href="change.php">Change Password</a>
		<a href="logout.php">Logout</a>
</body>		
	
