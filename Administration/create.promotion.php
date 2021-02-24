<?php include 'adminsesion.php';
    include '../PHP/conect.One.php';?>
<?php

include '../PHP/conect.One.php';

// variables

$Itemimg=$_FILES['itemimg']['name'];
$Itemname=$_POST['itemname'];
$Description=$_POST['description'];
$price=$_POST['price'];

if(move_uploaded_file($_FILES['itemimg']['tmp_name'], "../img/". $_FILES["itemimg"]['name']))
{
	echo"uploaded";
}
else
{
	echo"file was not uploaded";
}


$sql_select="SELECT * FROM Promotions WHERE title='$Itemname' && price='$price'";

$result=mysqli_query($connection,$sql_select);

if(mysqli_num_rows($result)!=1){
// Promotions
$promosql="INSERT INTO Promotions(ID,title,description,price,image)
VALUES('0','$Itemname','$Description','$price','$Itemimg')";


header('refresh:1;url=https://ritxykun.com/50WEB/Administration/admin.display.promotions.php');
mysqli_query($connection,$promosql);
}
else{
	header('refresh:1;url=https://ritxykun.com/50WEB/Administration/admin.display.promotions.php');
	echo "Promotion already exists"."<br/>";
	echo "Please insert a diferent promotion"."<br/>";
}


?>

