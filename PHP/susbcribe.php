<?php

// Server conection
include 'conect.One.php';


//suscribe variable to bring email
$suscribe_email=$_POST['emailsus'];




$sql="SELECT * FROM Subscribe WHERE Email='$suscribe_email'";
$sql_insert= "INSERT INTO Subscribe(id,Email) VALUES ('0','$suscribe_email')";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);

if($count==1){



    header('refresh:3;url=http://ritxykun.com/50WEB/index.php');
    echo "<h3 class='text-white text-centre'>Email already exists<h3>"."<br/>";
    echo "<h3 class='text-white text-centre'>Please insert another email<h3>"."<br/>";

}


else{
    mysqli_query($connection,$sql_insert);
    header('refresh:1;url=http://ritxykun.com/50WEB/index.php');
    echo "<h3 class='text-white'>thanks for suscribe with us<h3>";
}
mysqli_close($connection);

?>