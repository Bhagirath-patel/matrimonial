<?php
		include("database.php");
		
		if(empty($_POST["email"]) && empty($_POST["password"])){
			
			echo "All Field Required";
			
		}
		else{
			$email=$_POST["email"];
			$password=$_POST["password"];
			echo $email;
			$rs=mysql_query("select * from login where email='$email' AND password='$password'");
			
			if($r=mysql_fetch_array($rs)){
				setCookie("email",$email,time()+3600);
				header("location:profile.php");
				
			}
			else{
				echo $email;
				
		}
		}



?>