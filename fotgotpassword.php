<?php

include 'conect.One.php';

$email_to=$_POST['email_to'];


// retrieve password from table where e-mail = $email_to
$sql="SELECT * FROM `Customers` WHERE Email='$email_to'";
$result=mysqli_query($connection,$sql);




$row=mysqli_fetch_array($result,MYSQLI_ASSOC);







/*if found this e-mail address, row must be 1 row 
keep value in variable name "$count"*/ 
$count=mysqli_num_rows($result);


if($count==1){

//redirect to log i page
header('refresh:1;url=');
// keep password in $your_password
$your_password=$rows['password'];
$first_name=$rows['Name'];

// ---------------- SEND MAIL FORM ---------------- 

// send e-mail to ...
$to=$email_to; 

// Your subject 
$subject="Your password"; 

// From 
$header="from: >"; 

// Your message 
$messages= "Dear member  ".$row['Name'].",\r\n";
$messages.="The following is your password to login to Patty Valentine's website\r\n";
$messages.="Your password is: " .$row['password']."\r\n";
$messages.="Thank you for being a member of Patty valentine's restaurant\r\n"; 
$messages.="Patty Valentine's \r\n";

// send email 
$sentmail = mail($to,$subject,$messages); 

}

// else if $count not equal 1 
else {
header('refresh:3;url=');
echo "Not found your email in our database";
} 

// if your email succesfully sent 
if($sentmail){
echo "Your Password Has Been Sent To Your Email Address";
}
else {
echo "Cannot send password to your e-mail address Please Go Back and Try Again";
}

?>