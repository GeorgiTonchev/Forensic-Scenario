<?php

session_start();
// Variables
include 'conect.One.com';
$log_email= $_POST['log_email'];
$log_password=$_POST['log_password'];

//connecting to database server
include 'conect.One.php';

//set variable

$sql="SELECT * FROM Customers WHERE Email='$log_email'";
$result= mysqli_query($connection,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	

if (!mysqli_query($connection,$sql)){

	die('Error;'.mysqli_error($connection));
}


if ($log_password == $row['Password']){
	

	header("location:../index.php");
	echo $row['Email'];
	echo " Your credential are correct <BR> Welcome ".$row['Name'].".";
	$_SESSION['name']=$row['Name'];
	$_SESSION['email']=$row['Email'];
	$_SESSION['student']=$row['Student'];
	
	
	

    

}	
	
	else {

		header('refresh:1;url=http://ritxykun.com/50WEB/loginform.php');
		echo "Your Username or Password are incorrect";
	}
	
	
	
	
	
?>