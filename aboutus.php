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



        <div class="container my-4">

            <div class="container my-5 p-5 z-depth-1">


                <!--Section: Content-->
                <section class="whitecream">

                    <!-- Section heading -->
                    <h1 class="text-center font-weight-bold mb-4 pb-2 hammer">About us</h1>
                    <!-- Section description -->
                    <p class="text-center lead grey-text mx-auto mb-5">Enjoy our live music shows every night of the
                        week or watch your favorite sports live whilst sampling one of our delicious
                        dishes or simply relax on our sun terrace with one of our famouse exclusive cocktails.</p>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-4">

                            <!-- Grid row -->
                            <div class="row mb-3">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="fas fa-2x fas fa-compact-disc redvintage"></i>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Rock&Roll</h5>
                                    <p class="grey-text">Every night music live with a different artists</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-3">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="fas fa-2x fa-users redvintage"></i>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Friends & Family</h5>
                                    <p class="grey-text">The perfect place for you and your family, when you will find a
                                        full and varied menu in a unique setting.</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-md-0 mb-3">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="fas fa-2x fa-glass-martini redvintage"></i>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Amazing Food</h5>
                                    <p class="grey-text">We’re an award-winning gourmet burger restaurant situated on
                                        Edinburgh’s City centre. Keepin’ it fresh with our local
                                        produce, crafted in-house daily to give you juicy and tender burgers and 100%
                                        homemade sauces.</p>
                                </div>
                                <!-- Grid column -->


                            </div>
                            <!-- Grid row -->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 text-center">
                            <img class="img-fluid" src="http://ritxykun.com/50WEB/img/juxebox.jpg" alt="Sample image">
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4">

                            <!-- Grid row -->
                            <div class="row mb-3">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="far fa-2x fa-heart redvintage"></i>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Beloved</h5>
                                    <p class="grey-text">You come to us with an idea—no matter how out there—and we’ll
                                        make it happen.</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row mb-3">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="fas fa-2x fa-hamburger redvintage"></i>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Relaxing</h5>
                                    <p class="grey-text mb-md-0">Best international cocktails and dishes from all over
                                        the world</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-2">
                                    <i class="fas fa-2x fa-music redvintage"></i>
                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-10">
                                    <h5 class="font-weight-bold mb-3 hammer">Dancing</h5>
                                    <p class="grey-text mb-0">If you want somewhere to eat good food and then enjoy a
                                        spin on the dancefloor, we've got you covered</p>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!--Section: Content-->


            </div>

        </div>

        <!-- Grid column -->
        <div class="col">

            <!--Google map-->
            <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8935.060516367064!2d-3.207590866193398!3d55.95344265319637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b8756aac1969%3A0x2b0aa190cb59778e!2sEdinburgh%20EH2!5e0!3m2!1sen!2suk!4v1588098057178!5m2!1sen!2suk"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>

        </div>

        <!-- Grid column -->
    </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js">
    </script>


    <?php include 'PHP/footer.php';?>
</body>

</html>