<?php

session_start();
include 'conect.One.php';

// Variables

$log_admin= $_POST['log_admin'];
$log_admin_password=$_POST['log_admin_password'];


//set variable

$sql="SELECT * FROM Admin WHERE Username='$log_admin'";
$result= mysqli_query($connection,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

$_SESSION['log_admin']=$row['Username'];


if (!mysqli_query($connection,$sql)){

	die('Error;'.mysqli_error($connection));
}


if ($log_admin_password == $row['password']){


	header('refresh:0;url="../Administration\adminhome.php"');
	echo " Your credential are correct <BR> Welcome ".$row['Username'].".";
	$_SESSION['username']=$row['Username'];	
	$_SESSION['log_admin']=$log_admin;
	
	}
	
	else {

		header('refresh:0;url=../adminlogin.php');
		echo "Your Username or Email are incorrect";
	}
	
	
	
	
	
?>