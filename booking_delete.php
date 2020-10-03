<?php

$name=$_SESSION['name'];
			define("server","localhost",true);
			define("user","root",true);
			define("password","",true);
			define("database","railres",true);
			//$cid=mysqli_connect(server,user,password,database) or die("connection failed");
			
			$cid=mysqli_connect(server,user,password,database) or die("connection error");
			$query="UPDATE `booking` SET cancel=b'1'  WHERE Name='".$_REQUEST['name']."' and Age='".$_REQUEST['age']."'";
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	
			if($n>=1)
			{
				header("location:booking_h.php");
			}
			else
			{
				echo "Something Wrong ";
				header("location:booking_h.php");
			}
			
			
			
			
			
			
			
			
			
			
			?>