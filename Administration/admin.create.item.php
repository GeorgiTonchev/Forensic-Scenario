<?php include 'adminsesion.php';
    include 'conect.One.php';?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>50,s</title>

    <link class="jsbin" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>



    <!-- Font Awesome -->

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='../css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='../css/mdb.min.css' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Your custom styles (optional) -->
    <link href='../css/style.css' rel='stylesheet'>
</head>

<body class=''>

    <?php include 'sidenav.php';?>
    <main class='mainadmin'>

        <div class='container-fluid black p-2'>
            <h1 class='text-center text-white'>Create Item</h1>
        </div>

        <script type='text/javascript'>
        $(document).ready(function() {
            $('.range').change(add_filter).mousemove(add_filter);
        });

        function add_filter() {
            var grayscale_val = $('#grayscale').val();
            var blur_val = $('#blur').val();
            var exposure_val = $('#exposure').val();
            var sepia_val = $('#sepia').val();
            var opacity_val = $('#opacity').val();

            $('#blah').css('-webkit-filter', 'grayscale(' + grayscale_val + '%) blur(' + blur_val + 'px) brightness(' +
                exposure_val + '%) sepia(' + sepia_val + '%) opacity(' + opacity_val + '%)');
        }
        </script>

        <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result)
                        .width(300)
                        .height(200);;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>

        <div class='container-fluid pt-5'>
            <form class='' action='createitemitem.php' method='post' id="form1" runat="server"
                enctype="multipart/form-data">

                <div class='form-row'>
                    <div id="edit_controls col-2">
                        <li>GrayScale<br><input id="grayscale" class="range" type="range" min="0" max="100" value="0">
                        </li>

                        <li>Blur<br><input id="blur" class="range" type="range" min="0" max="10" value="0"></li>

                        <li>Exposure<br><input id="exposure" class="range" type="range" min="0" max="200" value="100">
                        </li>

                        <li>Sepia<br><input id="sepia" class="range" type="range" min="0" max="100" value="0"></li>

                        <li>Opacity<br><input id="opacity" class="range" type="range" min="0" max="100" value="100">
                        </li>
                    </div>
                    <div class='col-md-8'>
                        <label for="=blah">Preview Image</label>
                        <img id="blah" name='itemimg' src="#" alt="Preview image" />
                    </div>
                </div>

                <input type='file' accept="image/*" capture="camera" name='itemimg' onchange="readURL(this);" />


                <div class='container-fluid'>


                    <div class="form-row">

                        <div class="col-md-3 mb-3">
                            <label for="itemname">Item Name</label>
                            <input type="text" class="form-control" name='itemname' id="Item.name"
                                placeholder="Item name" required>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="category">Category</label>
                            <select class='mdb-select border border-0 form-control' name='category'>
                                <option value='Starters'>Starter</option>
                                <option value='MainCourses'>Main course</option>
                                <option value='Desserts'>Dessert</option>
                                <option value='Milkshakes'>Milkshake</option>
                                <option value='Burgers'>Burger</option>
                                <option value='Hotdogs'>Hotdog</option>
                                <option value='ExtraIngredients'>Extra Ingredient</option>
                                <option value="Drinks">Drinks</option>
                            </select>

                        </div>
                    </div>

                    <div class='form-row'>
                        <div class="col-md-3 mb-3">
                            <label for="Item.description">Item Description</label>
                            <input type="textarea" class="form-control" name='description' id="Item.description"
                                placeholder="Description" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="Item.ingredients">Item Ingredients</label>
                            <div class="input-group">
                                <div class="input-group-prepend">

                                </div>
                                <input type="text" class="form-control" id="Item.ingredients" placeholder="Ingredients"
                                    name='ingredients' aria-describedby="Item.ingredients" required>
                            </div>
                        </div>


                    </div>


                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="Item.allergens">Item Allergens</label>
                            <input type="text" class="form-control" id="Item.allergens" name='allergens'
                                placeholder="Allergens" required>
                        </div>
                    </div>

                    <div class="form-row float-left">
                        <div class="col-md-2 mb-3">
                            <label for="cost">Cost price</label>
                            <input type="text" class="form-control" id="cost" name='cost' placeholder="Cost" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="tax">tax</label>
                            <input type="text" class="form-control" id="tax" name='tax' placeholder="Tax" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="price">Total price</label>
                            <input type="text" class="form-control" id="price" name='price' placeholder="Price"
                                required>
                        </div>
                    </div>


                    <div class='form-row'>
                        <div class='col'>
                            <button class="btn btn-primary" name='create' type="create">Create</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
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






if(move_uploaded_file($_FILES['itemimg']['tmp_name'], "../img/". $_FILES["itemimg"]['name']))
{
	echo"uploaded";
}
else
{
	echo"file was not uploaded";
}

// Starters insert SQL
$sql="INSERT INTO $Category(ID,Name,Description,Ingredients,Allergens,Cost,Tax,Price,Category,Image)
VALUES('0','$Itemname','$Description','$Ingredients','$allergens','$cost','$tax','$price','$Category','$Itemimg')" ;





if(isset($_POST['create'])){

    header('Location: https://ritxykun.com/50WEB/Administration/adminmain.php');
    mysqli_query($connection,$sql);

  
}


?>


    </main>


    <!-- Scripts -->
    <?php include 'PHP/scripts.php';?>

</body>

</html>