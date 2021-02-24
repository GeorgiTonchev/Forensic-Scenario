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
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>


<body class='ligthblack'>
    <?php include 'PHP/navbar.php';?>
    <main class='text-center justify-content-center'>
        <!-- Top image container -->
        <div class="container-fluid"
            style="background-image: url(http://ritxykun.com/50WEB/img/2burger.jpg);background-repeat: no-repeat;">

            <!--  text over image -->

            <div class="row pt-3">
                <div class='col-12 text-center text-justify pt-5'>

                    <h1 class=' hammer  animated bounceIn slower whitecream'>Your Resaturant</h1>
                    <h1 class=' hammer animated bounceIn slower whitecream'>In Edinburgh</h1>
                    <h1 class=' hammer animated bounceIn slower whitecream'>city center</h1>
                </div>
            </div>

            <!--  Book buttom  -->
            <div class='row d-flex justify-content-center p-5 m-5'>
                <div class='col'>
                    <a href='http://ritxykun.com/50WEB/bookatable.php' class='whitecream btn backgroundred hammer'>
                        <h5>Book</h5>
                    </a>
                </div>
            </div>
            <!-- end book -->
            <!-- log in register -->

            <!-- end log in -->
        </div>


        <!-- end top image container  -->
        <div class='container-fluid pt-5'>
            <div class='row justify-content-center'>
                <div class='col-6 text-center text-justify'>
                    <h1 class='hammer text-white p-1'>About us</h1>
                    <p class='white-text p-2'>We’re an award-winning gourmet burger restaurant situated on Edinburgh’s
                        City centre. Keepin’ it fresh with our local
                        produce, crafted in-house daily to give you juicy and tender burgers and 100% homemade sauces.
                    <p>
                    <div class='row d-flex justify-content-center'>

                        <div class='col-12 text-center'>
                            <a href='loginform.php' class='whitecream btn backgroundred'>Log In</a>
                            <a href='registerform.php' class='whitecream btn backgroundred'>Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- FRESH FOOD -->

        <div class="container  p-2 backgroundred my-5 z-depth-1">


            <!--Section: Content-->
            <section class="no-gutters black">

                <div class="row pr-lg-5 no-gutters">
                    <div class="col-md-7 mb-4">

                        <div class="view">
                            <img src="img/beef.jpg" class="img-fluid" alt="smaple image">
                        </div>

                    </div>
                    <div class="col-md-5 d-flex align-items-center pl-2">
                        <div class='white-text text-justify text-center'>

                            <h3 class="hammer mb-4">fresh local Sourced food</h3>

                            <p class=''>We use local ingredients wherever
                                possible and set out to make only things that taste and look delicious
                                and that we would be proud enough to serve to our most precious people.</p>
                            <div class='row d-flex justify-content-center'>
                                <div class='col'>
                                    <a href='menu.php' class='whitecream btn backgroundred'>
                                        <p class='hammer'>MENU</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--Section: Content-->


        </div>



        <!-- FRESH FOOD -->

        <div class="container  p-2 backgroundred my-5 z-depth-1">


            <!--Section: Content-->
            <section class="no-gutters black">

                <div class="row pr-lg-5 no-gutters">
                    <div class="col-md-5 mb-4 pt-3">
                        <div class='white-text text-justify text-center pt-5'>

                            <h3 class="hammer mb-4 pt-5">celebrations</h3>

                            <p class=' p-3'>We are able to provide all you need for your special day,
                                You just need to contact us.</p>
                            <div class='row d-flex justify-content-center'>
                                <div class='col'>
                                    <a href='contact.php' class='whitecream btn backgroundred'>
                                        <p class='hammer'>Contact</p>
                                    </a>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-md-7 d-flex align-items-center pl-5">
                        <div class="view">
                            <img src="img/celebrationcake.jpg" class="img-fluid" alt="smaple image">
                        </div>
                    </div>
                </div>

            </section>
            <!--Section: Content-->


        </div>


        <!-- SUBSCRIBE START -->

        <div class="container text-center pt-4 pb-4 pl-0 pr-0">
            <div class='row justify-content-center'>
                <div class='col text-center'>
                    <form class="input-grey mb-5" action="PHP/susbcribe.php" method="post">
                        <div class="form-row justify-content-center">
                            <div class="col-8">
                                <div class="input-group input-group-lg z-depth-1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text rgba-white-light border-0"><i
                                                class="fa fa-envelope white-text"></i></span>
                                    </div>
                                    <input type="email" name="emailsus"
                                        class="form-control form-control-lg text-black  border-0 z-depth-0"
                                        placeholder="Email Address" required>
                                </div>
                            </div>
                        </div>
                        <div class='form-row justify-content-center'>
                            <div class="col-8  text-white">
                                <button type="submit"
                                    class="btn btn-block backgroundred americana whitecream ">Suscribe</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE END -->



    </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer>
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
        defer>
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js" defer>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
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

    <?php include 'PHP/footer.php';?>
</body>

</html>