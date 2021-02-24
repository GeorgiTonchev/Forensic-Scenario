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


echo $Itemimg .$Itemname .$Category .$Description .$Ingredients .$allergens.$cost.$price.$tax;

if(move_uploaded_file($_FILES['itemimg']['tmp_name'], "../img/". $_FILES["itemimg"]['name']))
{
	echo"uploaded";
}
else
{
	echo"file was not uploaded";
}

// Starters insert SQL
$stratersql="INSERT INTO Starters(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;



// Mains insert SQL
$mainsql= "INSERT INTO MainCourses(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;

// Desserts
$dessertsql= "INSERT INTO Desserts(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;

// Milkshakes
$milkshakesql= "INSERT INTO Milkshakes(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;


// Burger
$burgersql= "INSERT INTO Burgers(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;


// Hotdogs
$hotdogsql= "INSERT INTO Hotdogs(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;


// extra
$extrasql= "INSERT INTO Extraingredients(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;

// Drinks
$drinkssql="INSERT INTO Drinks(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')";


// Promotions
$promosql="INSERT INTO Promotions(ID,title,description,price,image)
VALUES('0','$Itemname','$Description','$price','$Itemimg')";
if($Category=='Starters'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$stratersql);


}


if($Category=='MainCourses'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$mainsql);
}


if($Category=='Desserts'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$dessertsql);
}


if($Category=='Milkshakes'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$milkshakesql);
}

if($Category=='Burgers'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$burgersql);
}

if($Category=='Hotdogs'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$hotdogsql);
}
if($Category=='Drinks'){

    header('refresh:3;url=http://ritxykun.com/50WEB/FUT50index.php');
    mysqli_query($connection,$drinkssql);
}




?>