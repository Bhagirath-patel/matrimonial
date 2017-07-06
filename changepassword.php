<?php
    include("database.php");
	if(empty($_POST["cp"]) && empty($_POST["np"]) && empty($_POST["rp"])){
		header("location:change.php?err=1");
	}
	else{
		$cp=$_POST["cp"];
		$np=$_POST["np"];
		$rp=$_POST["rp"];
	
		if($np==$rp){
			$rs=mysql_query("select * from login where password='$cp'");
			if($r=mysql_fetch_array($rs)){
				mysql_query("update login set password='$np'");
				header("location:profile.php");
			}
			else{
			     header("location:change.php?invaild=1");	
			}
		}
		else{
			header("location:change.php?missmatch=1");
		}
		
	}
	?>