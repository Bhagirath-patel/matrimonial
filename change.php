<html>
	<head>
			<title>change password</title>
	</head>
	<body><?php 
	          if(isset($_GET["err"])){
				  echo "all gield required";
			  }
			  if(isset($_GET["invalid"])){
				  echo "Invalid Current Password";
			  }
			  if(isset($_GET["missmatch"])){
				  echo "New password and retype password not match";
			  }
			  ?>
			<table><tr><td><H1>CHANGE PASSWORD</H1></td></tr></table>
				   <form method="post" action="changepassword.php">
					   <table>
					   <tr><td> current password:</td><td><input type="text" name="cp" required="required"></td></tr>
					 <tr><td>  new password:</td><td><input type="text" name="np" required="required"></td></tr>
					  <tr><td> Retype password:</td><td><input type="text" name="rp" required="required"></td></tr>
					  <tr><td colspan="2"><input type="submit" value="submit"></td></tr>
					</table>
				   </form>  
					  <a href="profile.php">BACK</a> 
    </body>
</html>