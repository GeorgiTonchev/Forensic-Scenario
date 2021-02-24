<?php include 'conect.One.php';?>
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
    <!-- Style-->
    <link href='css/style.css' rel='stylesheet'>
</head>

<body class='ligthblack'>
<?php include 'PHP/navbar.php';?>
    <div class="container mt-5">


        <!--Section: Content-->
        <section class="dark-grey-text mb-5">

            <style>
            .map-container-section {
                overflow: hidden;
                padding-bottom: 56.25%;
                position: relative;
                height: 0;
            }

            .map-container-section iframe {
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                position: absolute;
            }
            </style>

            <!-- Section heading -->
            
            <h1 class="font-weight-bold mb-4 text-center hammer white-text">Contact Us</h1>
        
            <!-- Section description -->

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

                    <!-- Form with header -->
                    <form class='text-center' action='PHP/contactformphp.php' method='post'>
                        <div class="card">
                            <div class="card-body">
                                <!-- Header -->
                                <div class="form-header redvintage m-0 p-0">
                                    <h3 class="mt-2 text-center"><i class="fas fa-envelope fa-x2"></i> Write to us:</h3>
                                </div>
                                <p class="dark-grey-text text-center">We'll write you Back.</p>
                                <!-- Body -->
                                <div class="md-form">

                                    <input type="text" id="form-name" name='Name' maxlength="18" class="form-control"required>
                                    <label for="form-name">Your name</label>
                                </div>
                                <div class="md-form">

                                    <input type="email" id="form-email" name='Email' class="form-control"required>
                                    <label for="form-email">Your email</label>
                                </div>
                                <div class="md-form">

                                    <input type="text" id="form-Subject" name='Subject' maxlength="20" class="form-control"required>
                                    <label for="form-Subject">Subject</label>
                                </div>
                                <div class="md-form">

                                    <textarea id="form-text" class="form-control md-textarea" name='Message' maxlength="255"
                                        rows="3"required></textarea>
                                    <label for="form-text">Send message</label>
                                </div>
                                <div class="text-center">
                                    <button class="btn backgroundred whitecream">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Form with header -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7">

                    <!--Google map-->
                    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4"
                        style="height: 400px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8935.060516367064!2d-3.207590866193398!3d55.95344265319637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4887b8756aac1969%3A0x2b0aa190cb59778e!2sEdinburgh%20EH2!5e0!3m2!1sen!2suk!4v1588098057178!5m2!1sen!2suk" width="600" height="450" 
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <h1 class='whitecream text-center p-3 m-5 americana'>Find us in the city centre of the wonderfull city of Edinburgh</h1>

                </div>

                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Content-->



    </div>
    <div class='row justify-content-center pb-2'>

        

            <?php include 'PHP/amenities.php';?>
       
    </div>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"defer></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"defer></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"defer></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"defer></script>
    </main>

    <?php include 'PHP/footer.php';?>
</body>

</html>