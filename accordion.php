<?php session_start();?>
<?php session_start();
include 'PHP/conect.One.php';
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    }
    else
    {
            $item_array= array(
                'item_id'  => $_GET["id"],
                'item_name' => $_GET["hidden_name"],
                'item_price' => $_GET["hidden_price"],
                'item_quantity' => $_GET["quantity"]
            );
            $_SESSION["shopping_cart"][0]= $item_array;
    }
}
if(!in_array($_GET["id"], $item_array_id))
            {
                 $count = count($_SESSION["shopping_cart"]);
                 $item_array = array(
                    'item_id'  => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"]
                 );
                 $_SESSION["shopping_cart"][$count] = $item_array;
            }
else
            {
                echo '<script>alert("Item Already Added")</script>';
                echo '<script>window.location="accordion.php"</script>';
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("item Removed")</script>';
                    echo '<script>window.location="accordion.php"</script>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Patty Valantine's</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
    <!-- Navbar -->
    <link href='css/style.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>

<body class='ligthblack'>
    <?php include 'PHP/navbar.php';?>

    <div class="container-fluid py-3">
        <div class="row">

            <?php include 'PHP/conect.One.php';?>


            <!-- Menu display -->

            <div class="container-fluid py-1 pb-1" id="accordion_menu">

                <div class="accordion py-1" id="accordionExample">

                    <!-- FIRST ACCORDION CARD1 -->



                    <div class="card">
                        <div class="card-header backgroundred" id="starters_menu">
                            <h2 class="mb-0">
                                <button class="btn btn-link whitecream" type="button" data-toggle="collapse"
                                    data-target="#collapseStarters" aria-expanded="true" aria-controls="collapseOne">
                                    Starters
                                </button>
                            </h2>
                        </div>


                        <!-- LIST OF STARTERS ITEMS-->

                        <div id="collapseStarters" class="collapse" aria-labelledby="starters_menu"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="col-12">
                                        <!-- PHP for display straters -->
                                        <?php


$Sqldisplay="SELECT * FROM Starters";


$result= mysqli_query($connection,$Sqldisplay);




while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

           echo'
           
             
                  
                            <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
                                <div class="form-group>
                                    <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                                        '.$row['Name'].'
                                    </p>
                                </div>
                                <div class="form-group pl-2">
                                    <p class="">
                                        '.$row['Price'].'£
                                    </p>
                                </div>
                                <div class="form-group pl-2">
                                <input type="text" name="quantity" class="form-control" value="1" />
                                </div>
                                <div class="form-group text-right pl-2 float-right">
                                <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
                                <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
                                <input type="submit" name="add_to_cart" class="btn" value="Add" />
                                </div>
                                
           
                            </form>
                
                    
                    <hr>
';
}?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END LIST STARTERS-->




                        <!-- END OF ACCORDION CARD 1 -->

                        <!-- SECOND ACCORDION CARD 2 -->
                        <div>
                            <div class="card">
                                <div class="card-header backgroundred" id="starters_menu">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link whitecream" type="button" data-toggle="collapse"
                                            data-target="#collapseMain" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Mains
                                        </button>
                                    </h2>
                                </div>
                            </div>
                            <div id="collapseMain" class="collapse" aria-labelledby="starters_menu"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-12">
                                            <?php

                        

// Display Mains
$Sqldisplay="SELECT * FROM MainCourses";

$result= mysqli_query($connection,$Sqldisplay);

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

    echo'
           
             
                  
    <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
        <div class="form-group>
            <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                '.$row['Name'].'
            </p>
        </div>
        <div class="form-group pl-2">
            <p class="">
                '.$row['Price'].'£
            </p>
        </div>
        <div class="form-group pl-2">
        <input type="text" name="quantity" class="form-control" value="1" />
        </div>
        <div class="form-group text-right pl-2 float-right">
        <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
        <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
        <input type="submit" name="add_to_cart" class="btn" value="Add" />
        </div>
        

    </form>


<hr>
';}
?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END OF ACCORDION CARD 2 -->

                            <!-- FIRST ACCORDION CARD 2 -->

                            <div class="card">
                                <div class="card-header backgroundred" id="starters_menu">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link whitecream" type="button" data-toggle="collapse"
                                            data-target="#collapseDesserts" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Desserts
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseDesserts" class="collapse" aria-labelledby="starters_menu"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-12">

                                                <?php

// Display Starters 
$Sqldisplay="SELECT * FROM Desserts";


$result= mysqli_query($connection,$Sqldisplay);

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

           echo'
           <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
           <div class="form-group>
               <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                   '.$row['Name'].'
               </p>
           </div>
           <div class="form-group pl-2">
               <p class="">
                   '.$row['Price'].'£
               </p>
           </div>
           <div class="form-group pl-2">
           <input type="text" name="quantity" class="form-control" value="1" />
           </div>
           <div class="form-group text-right pl-2 float-right">
           <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
           <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
           <input type="submit" name="add_to_cart" class="btn" value="Add" />
           </div>
           
   
       </form>
   
   
   <hr>
   ';}?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF ACCORDION CARD 3 -->


                                <div class="card">
                                    <div class="card-header backgroundred" id="starters_menu">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link whitecream" type="button" data-toggle="collapse"
                                                data-target="#collapseBurgers" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Burgers
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseBurgers" class="collapse" aria-labelledby="starters_menu"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="col-12">

                                                    <?php

// Display Starters 
$Sqldisplay="SELECT * FROM Burgers";


$result= mysqli_query($connection,$Sqldisplay);

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

           echo'
           <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
           <div class="form-group>
               <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                   '.$row['Name'].'
               </p>
           </div>
           <div class="form-group pl-2">
               <p class="">
                   '.$row['Price'].'£
               </p>
           </div>
           <div class="form-group pl-2">
           <input type="text" name="quantity" class="form-control" value="1" />
           </div>
           <div class="form-group text-right pl-2 float-right">
           <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
           <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
           <input type="submit" name="add_to_cart" class="btn" value="Add" />
           </div>
           
   
       </form>
   
   
   <hr>
   ';}?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- END OF ACCORDION CARD 3 -->


                                    <div class="card">
                                        <div class="card-header backgroundred" id="starters_menu">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link whitecream" type="button"
                                                    data-toggle="collapse" data-target="#collapseHotdogs"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Hotdogs
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseHotdogs" class="collapse" aria-labelledby="starters_menu"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="d-flex flex-row">
                                                    <div class="col-12">

                                                        <?php

// Display Starters 
$Sqldisplay="SELECT * FROM Hotdogs";


$result= mysqli_query($connection,$Sqldisplay);

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

           echo'
           <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
           <div class="form-group>
               <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                   '.$row['Name'].'
               </p>
           </div>
           <div class="form-group pl-2">
               <p class="">
                   '.$row['Price'].'£
               </p>
           </div>
           <div class="form-group pl-2">
           <input type="text" name="quantity" class="form-control" value="1" />
           </div>
           <div class="form-group text-right pl-2 float-right">
           <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
           <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
           <input type="submit" name="add_to_cart" class="btn" value="Add" />
           </div>
           
   
       </form>
   
   
   <hr>
   ';}?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END OF ACCORDION CARD 3 -->


                                        <div class="card">
                                            <div class="card-header backgroundred" id="starters_menu">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link whitecream" type="button"
                                                        data-toggle="collapse" data-target="#collapseMilkshakes"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Milkshakes
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseMilkshakes" class="collapse"
                                                aria-labelledby="starters_menu" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="d-flex flex-row">
                                                        <div class="col-12">

                                                            <?php

// Display Starters 
$Sqldisplay="SELECT * FROM Milkshakes";


$result= mysqli_query($connection,$Sqldisplay);

while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){      

           echo'
           <form class="form-inline mw-100" method="post" action="accordion.php?action=add&id='.$row["ID"].'">
           <div class="form-group>
               <p class="pl-1  text-lowercase" data-toggle="collapse" href="#'.$row['Name'].'" role="button" aria-expanded="false" aria-controls="'.$row['Name'].'">
                   '.$row['Name'].'
               </p>
           </div>
           <div class="form-group pl-2">
               <p class="">
                   '.$row['Price'].'£
               </p>
           </div>
           <div class="form-group pl-2">
           <input type="text" name="quantity" class="form-control" value="1" />
           </div>
           <div class="form-group text-right pl-2 float-right">
           <input type="hidden" name="hidden_name" value="'.$row["Name"].'" />
           <input type="hidden" name="hidden_price" value="'.$row["Price"].'" />
           <input type="submit" name="add_to_cart" class="btn" value="Add" />
           </div>
           
   
       </form>
   
   
   <hr>
   ';}?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- END OF ACCORDION CARD 3 -->
                                        </div>
                                        <!-- End Menu Display-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div style="clear:both"></div>
                    </br>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3> Order Details</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr class="text-white">
                                            <th width="40%">Item Name</th>
                                            <th width="10%">Quantity</th>
                                            <th width="20%">Price</th>
                                            <th width="15%">Total</th>
                                            <th width="5%">Action</th>
                                        </tr>
                                        <?php 
            
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                        
            
            ?>
                                        <tr class="text-white">
                                            <td><?php echo $values["item_name"];?></td>
                                            <td><?php echo $values["item_quantity"];?></td>
                                            <td>£<?php echo $values["item_price"];?></td>
                                            <td>£<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>
                                            </td>
                                            <td><a
                                                    href="accordion.php?action=delete&id=<?php echo $values["item_id"];?>"><span
                                                        class="text-danger">Remove</spam></a></td>
                                        </tr>
                                        <?php 
                

                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
            }
        ?>
                                        <tr class="text-white align-rigth">
                                            <td>Total</td>
                                            <td>£<?php echo number_format($total, 2);?>
                                        </tr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                </main>
                <!-- SCRIPTS -->
                <!-- JQuery -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
                    defer>
                </script>
                <!-- Bootstrap tooltips -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" defer>
                </script>
                <!-- Bootstrap core JavaScript -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer>
                </script>
                <!-- MDB core JavaScript -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js" defer>
                </script>
                <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"
                    data-cfasync="false">
                </script>
                <script>
                window.cookieconsent.initialise({
                    "palette": {
                        "popup": {
                            "background": "#aa0000",
                            "text": "#ffdddd"
                        },
                        "button": {
                            "background": "#ff0000"
                        }
                    },
                    "position": "top",
                    "content": {
                        "href": "https://www.termsfeed.com/live/cfa7796a-2de8-4ebc-aa87-4e715eea0a89"
                    }
                });
                </script>
                <br>

</body>

</html>