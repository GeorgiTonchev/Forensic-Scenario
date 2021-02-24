<?php
//register php 
// Variables
$reg_name=$_POST['reg_name'];
$reg_surname=$_POST['reg_surname'];
$reg_password=$_POST['reg_password'];
$reg_email=$_POST['reg_email'];
$reg_confirm=$_POST['reg_confirm'];
$reg_phone=$_POST['reg_phone'];
$reg_student=$_POST['reg_student'];
$reg_postcode=$_POST['reg_postcode'];
$reg_address=$_POST['reg_address'];

// server conection variables 

include 'conect.One.php';

// sql query select
$sql_select="SELECT * FROM Customers WHERE Email='$reg_email' && Name='$reg_name'";

$result=mysqli_query($connection,$sql_select);
if($reg_password==$reg_confirm){

                                 if(mysqli_num_rows($result)!=1){

                                    mysqli_query($connection,"INSERT INTO Customers(ID,Name,Surname,Email,Phone,Password,Student,Postcode,Address)
                                    VALUES('0','$reg_name','$reg_surname','$reg_email','$reg_phone','$reg_password','$reg_Student','$reg_postcode','$reg_address')");
                                    header('refresh:1;url="http://ritxykun.com/50WEB/loginform.php"');
                                    echo "new username register"."<br>";

                                 }

                                else{
                                    header('refresh:1;url=http://ritxykun.com/50WEB/loginform.php');
                                    echo "Username or Email already exists"."<br/>";
                                    echo "Please select another username"."<br/>";}

                                }
         else{
            header('refresh:1;url="http://ritxykun.com/50WEB/registerform.php"');
            echo' Passwords must be the same';
         }                       


?>