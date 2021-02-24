<?php session_start();?>
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
</head>



<body class='ligthblack'>
<?php include 'PHP/navbar.php';?>
    <main class="">


        <div class="container-fluid">
            <!-- Grid row -->
            <div class="row justify-conten-centre">
               
                <!-- php -->
                <?php include 'PHP/conect.One.php';?>
                <?php

                

                        // Display promotions php 
                $Sqldisplay="SELECT * FROM Promotions order by ID desc";
                

                $result= mysqli_query($connection,$Sqldisplay);

                if (!isset($_SESSION['name'])){
                    header('Refresh: .5; ../loginform.php');
                    echo "<div class='col text-center'>
                    <h1 class='hammer p-5 text-center white-text'>Please <a href='loginform.php'>Log In</a> before Shoping<h1>
                    </div>";
                    
                }
                else{
 
                    while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)){

                    echo'
                    
                            <!-- Grid column -->
                            <div class="col py-3">

                                    <!-- Card -->
                                    <div class="card card-image" style="background-image: url(http://ritxykun.com/50WEB/img/'.$row['Image'].');background-repeat: no-repeat;height: 400px; width: auto;
                                    background-size: cover;">
                                    <div class="text-white text-center d-flex align-items-center  pb-5 px-2 px-md-5 rounded">
                                    <div class="card-body">
                                    
                                    <h1 class="fontler m-0 fbig card-title"><strong>
                                   '.$row['title'].'<strong>
                                    </h1>
                                    <p class="card-text">'.$row['description'].'
                                    </p>
                                    <h5 class="animated bounceInUp hammer fbig2">'.$row['price'].'£</h5>
                                        <div class="col-3 card-footer float-md-right float-lg-right">
                                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" class="p-0 m-0" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_xclick">
                                            <input type="hidden" name="business" value="sb-urqf471759801@business.example.com">
                                            <input type="hidden" name="lc" value="US">
                                            <input type="hidden" name="item_name" value="'.$row['title'].'">
                                            <input type="hidden" name="item_number" value="'.$row['ID'].'">
                                            <input type="hidden" name="amount" value="'.$row['price'].'">
                                            <input type="hidden" name="currency_code" value="GBP">
                                            <input type="hidden" name="button_subtype" value="services">
                                            <input type="hidden" name="no_note" value="0">
                                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                            </form>
                                        </div>  
                                    </div>
                                    </div>
                                    </div>
                                    <!-- Card -->

                                </div>
                                </div>';}
                                            }
                            ?>
            </div>
            </div>
                                            

                <!-- SCRIPTS -->
                <!-- JQuery -->
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer>
                </script>
                <!-- Bootstrap tooltips -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" defer>
                </script>
                <!-- Bootstrap core JavaScript -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer></script>
                <!-- MDB core JavaScript -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
                </script>
    </main>

    <?php include 'PHP/footer.php';?>
</body>

</html>