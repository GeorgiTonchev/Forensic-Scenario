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
        <div class='container'>
            <div class='row'>
                <div class='col'>

                    <!-- Section: Block Content -->
                    <section class="dark-grey-text text-center">

                        <h3 class="text-center hammer  pt-5 white-text font-weight-bold mb-4 pb-2">Our Menu</h3>
                        <p class="text-center text-muted white-text w-responsive mx-auto mb-5"></p>

                        <!-- First row -->
                        <div class="row">

                            <!-- First column -->
                            <div class="col-lg-4 col-md-12 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img/saladstart.jpg" class="img-fluid" alt="Sample image">
                                    <div class="mask flex-center">
                                        <a class="btn btn-outline-white btn-rounded" href='starters.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase hammer  white-text text-center text-muted mt-4 mb-0">Starters
                                </p>

                            </div>
                            <!-- First column -->

                            <!-- Second column -->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img\steakmain.jpg" class="img-fluid" alt="Sample image">
                                    <div class=" mask flex-center">
                                        <a class="btn btn-outline-white btn-rounded" href='mains.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase text-center hammer white-text text-muted mt-4 mb-0">Mains</p>

                            </div>
                            <!-- Second column -->

                            <!-- Third column -->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img\cakedessert.jpg" class="img-fluid" alt="Sample image">
                                    <div class="mask flex-center">
                                        <a class="btn  btn-outline-white btn-rounded" href='desserts.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase text-center hammer white-text text-muted mt-4 mb-0">Desserts
                                </p>

                            </div>
                            <!-- Third column -->

                        </div>
                        <!-- First row -->

                    </section>
                    <!-- Section: Block Content -->
                </div>
            </div>
        </div>

        <!-- break line -->
        <hr>
        <!-- break line -->

        <!--  -->
        
        <!--  -->

        <!-- break line -->
        <hr>
        <!-- break line -->

        <!-- second row -->
        <div class='container'>
            <div class='row'>
                <div class='col'>

                    <!-- Section: Block Content -->
                    <section class="dark-grey-text text-center">

                        <!-- First row -->
                        <div class="row">
                            <!-- Burgers -->
                            <!-- First column -->
                            <div class="col-lg-4 col-md-12 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img\burgerburger.jpg" class="img-fluid" alt="Sample image">
                                    <div class="mask flex-center">
                                        <a class="btn btn-outline-white btn-rounded" href='burgers.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase hammer  white-text text-center text-muted mt-4 mb-0">Burgers
                                </p>

                            </div>
                            <!-- First column -->

                            <!-- Hot Dogs -->
                            <!-- Second column -->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img\sandwich.jpg" class="img-fluid" alt="Sample image">
                                    <div class=" mask flex-center">
                                        <a class="btn btn-outline-white btn-rounded" href='hotdogs.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase text-center hammer white-text text-muted mt-4 mb-0">Sandwiches $ Hotdogs</p>

                            </div>
                            <!-- Second column -->
                            <!-- Milkshakes -->
                            <!-- Third column -->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <div class="view overlay z-depth-1">
                                    <img src="img\milkmilkshake.jpg" class="img-fluid" alt="Sample image" heigth='510'>
                                    <div class="mask flex-center">
                                        <a class="btn  btn-outline-white btn-rounded" href='milkshakes.php'>see more</a>
                                    </div>
                                </div>
                                <p class="text-uppercase text-center hammer white-text text-muted mt-4 mb-0">Milkshakes
                                </p>

                            </div>
                            <!-- Third column -->

                        </div>
                        <!-- First row -->

                    </section>
                    <!-- Section: Block Content -->
                </div>
            </div>
        </div>

    </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"defer></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"defer>
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"defer></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
    </script>


    <?php include 'PHP/footer.php';?>
</body>

</html>