<?php include 'adminsesion.php';?>
<?php

include '../PHP/conect.One.php';

// variables

$Itemimg=$_FILES['itemimg']['name'];
$Itemname=$_POST['itemname'];
$Category=$_POST['category'];
$Description=$_POST['description'];
$Ingredients=$_POST['ingredients'];
$allergens=$_POST['allergens'];
$cost=$_POST['cost'];
$tax=$_POST['tax'];
$price=$_POST['price'];
$id=$_GET['id'];







// Starters insert SQL
// $sql="INSERT INTO $Category(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
// VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;

$sql="UPDATE $Category SET `Name`='$Itemname',`Description`='$Description',`Ingredients`='$Ingredients',`Allergens`='$allergens',`Cost`='$cost',`Tax`='$tax',`Price`='$price',`Category`='$Category',`Image`='$Itemimg' WHERE ID='$id'";


if(isset($_POST['Update'])){



    if(move_uploaded_file($_FILES['itemimg']['tmp_name'], "../img/". $_FILES["itemimg"]['name']))
    {
        echo"uploaded";
    }
    else
    {
        echo"file was not uploaded";
    }
    





    header('Location:http://ritxykun.com/50WEB/Administration/adminmain.php');
    mysqli_query($connection,$sql);
    echo "updated";

  

}
if(isset($_POST['Delete'])){
   
    $Delete="DELETE FROM $Category WHERE ID='$id'";
    mysqli_query($connection,$Delete);
    
  }

?>