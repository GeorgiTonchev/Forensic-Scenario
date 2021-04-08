<?php
//register php 
// Variables
$reg_name=$_POST['reg_name'];
$reg_surname=$_POST['reg_surname'];
$reg_password=$_POST['reg_password'];
$reg_email=$_POST['reg_email'];
$reg_confirm=$_POST['reg_confirm'];
$reg_phone=$_POST['reg_phone'];
$reg_card_name=$_POST['reg_card_name'];
$reg_card_number=$_POST['reg_card_number'];
$reg_card_date=$_POST['reg_card_date'];

// server conection variables 

include 'conect.One.php';

// sql query select
$sql_select="SELECT * FROM Customers WHERE Email='$reg_email' && Name='$reg_name'";

$result=mysqli_query($connection,$sql_select);
if($reg_password==$reg_confirm){

                                 if(mysqli_num_rows($result)!=1){

                                    mysqli_query($connection,"INSERT INTO Customers(ID,Name,Surname,Email,Phone,Password,card_name,card_number,card_date)
                                    VALUES('0','$reg_name','$reg_surname','$reg_email','$reg_phone','$reg_password','$reg_card_name','$reg_card_number','$reg_card_date')");
                                    header('refresh:1;url="../loginform.php"');
                                    echo "new username register"."<br>";

                                 }

                                else{
                                    header('refresh:1;url="../loginform.php"');
                                    echo "Username or Email already exists"."<br/>";
                                    echo "Please select another username"."<br/>";}

                                }
         else{
            header('refresh:1;url="registerform.php"');
            echo' Passwords must be the same';
         }                       


?>