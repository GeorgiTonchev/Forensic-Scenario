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
        <div class="container-fluid p-5">
            <div class='row justify-content-center'>
                <div class='col-8'>
                    <h1 class="form-heading fontler redvintage"></h1>
                    <div class="login-form">
                        <div class="main-div main-center col-12">
                            <div class="panel text-center">
                                <h1 class="text-center title hammer redvintage">User Log In</h1>
                                <p class='whitecream'>Please enter your username and password</p>
                            </div>

                            <form id="Login" action="PHP/login.php" method="POST">

                                <div class="form-group">


                                    <input type="email" name="log_email" class="form-control" id="inputUsername"
                                        placeholder="Email" required>

                                </div>

                                <div class="form-group">

                                    <input type="password" name="log_password" class="form-control" id="inputPassword"
                                        placeholder="Password" required>

                                </div>
                                <div class='text-center'>
                                    <a href="forgotpassform.php" class='whitecream'>Forgot password?</a>
                                </div>
                                <div class='text-center'>
                                    <a href="registerform.php" class='redvintage'>Register</a>
                                </div>

                                <div class='text-center'>
                                <input type="submit" class="btn backgroundred whitecream">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"defer>
        </script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"defer>
        </script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"defer></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
        </script>
    </main>

    <?php include 'PHP/footer.php';?>
</body>

</html>