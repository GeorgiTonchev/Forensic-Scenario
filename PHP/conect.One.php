<?php

// Variables
$db_username="ritxykun_com";
$db_password="iRrrkybTdtCavyAKULia8JSk";
$host="ritxykun.com.mysql";


//connecting to database server
$connection = mysqli_connect ($host, $db_username, $db_password,$db_username);

if(!connection){

    
echo "Debugging errno:".mysqli_conect_errno().PHP_EOL."<br/>";
echo "Debugging error:".mysqli_conect_error().PHP_EOL."<br/>";
exit();

}
//or die("fatal error");

?>