
<?php

include 'conect.One.php';



$email_to=$_POST['email_to'];


// retrieve password from table where e-mail = $email_to
$sql="SELECT * FROM Customers WHERE Email='$email_to'";
$result=mysqli_query($connection,$sql);




$row=mysqli_fetch_array($result,MYSQLI_ASSOC);







/*if found this e-mail address, row must be 1 row 
keep value in variable name "$count"*/ 
$count=mysqli_num_rows($result);


if($count==1){

//redirect to log i page

// keep password in $your_password
$your_password=$rows['Password'];
$first_name=$rows['Name'];

// ---------------- SEND MAIL FORM ---------------- 

// send e-mail to ...
$to=$email_to; 

// Your subject 
$subject="Your password"; 

// From 
$header = "From:pattyvalentines@ritxykun.com \r\n";

// Your message 
$messages= "Dear member  ".$row['Name'].",\r\n";
$messages.="The following is your password to login to Patty Valantine's website\r\n";
$messages.="Your password is: " .$row['Password']."\r\n";
$messages.="Thank you for being a member of Patty Valantine's\r\n"; 
$messages.="Your Patty Valantine's Team \r\n";

// send email 
$sentmail = mail($to,$subject,$messages,$header); 

}

// else if $count not equal 1 
else {
header('refresh:1;url=http://ritxykun.com/50WEB/registerform.php');
echo "Not found your email in our database";
} 

// if your email succesfully sent 
if($sentmail){
    header('refresh:0;url="http://ritxykun.com/50WEB/loginform.php"');
echo "Your Password Has Been Sent To Your Email Address";
}
else {
    header("Location:http://ritxykun.com/50WEB/FUTindex.php");
echo "Cannot send password to your e-mail address Please Go Back and Try Again";
}

?>