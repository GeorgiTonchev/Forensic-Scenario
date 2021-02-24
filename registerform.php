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


        <!---register Form-->
        <div class="register container-fluid  py-3">


            <div class="row justify-content-center">

                <div class="col-md-8 p-3 black white-text">
                    <div class="main-login main-center white-text col-md-12">
                        <h5 class="text-center hammer p-3 m-2">Register Form</h5>
                        <form class="form white-text" method="post" action="PHP/register.php">

                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2">Name</span>
                                        <input type="text" maxlength="10" class="form-control" name="reg_name" id="name"
                                            required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2">Surname</span>
                                        <input type="text" maxlength="10" class="form-control" name="reg_surname" id="surname"
                                             required />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2">Email</span>
                                        <input type="email" class="form-control" maxlength='150'
                                            name="reg_email" id="email" required>
                                        <p class='redvintage hammer'> This will be your username</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2">Phone</span>
                                        <input type="number" max="9999999999" min="0000000001" class="form-control" name="reg_phone"
                                            id="phone"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2">Password</span>
                                        <input type="password" class="form-control" name="reg_password" id="password" minlength="8"
                                             required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon p-2"> Retype Password</span>
                                        <input type="password" class="form-control" name="reg_confirm" id="confirm" minlength="8"
                                             required>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group text-black text-justify row'>
                                <div class='col pl-4 ml-4'>
                                    <h1 class='p-2 hammer redvintage'>Student</h1>

                                    <!-- Default unchecked -->
                                    <div class="custom-control custom-radio name='reg_student' ">
                                        <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                            value="yes" name="reg_student" name="defaultExampleRadios">
                                        <label class="custom-control-label  text-center" value="yes"
                                            for="defaultUnchecked">YES</label>
                                    </div>

                                    <!-- Default checked -->
                                    <div class="custom-control custom-radio" name='reg_student'>
                                        <input type="radio" class="custom-control-input" id="defaultChecked"
                                            name="reg_student" name="defaultExampleRadios" checked>
                                        <label class="custom-control-label  text-center" value="no"
                                            for="defaultChecked">NO</label>
                                    </div>
                                    <p class='text-justify text-center'> Even if you mark yes, you will be
                                        required to show your student ID in the restaurant.</p>
                                </div>
                                <div class='col'>
                                    <h6 class='p-2 hammer redvintage'>Postcode</h6>
                                    <input type='textbox' maxlength="6" id='address' name='reg_address' required>
                                    <h6 class='p-2 hammer redvintage'>Address</h6>
                                    <input type='textbox' maxlength="155" id='postcode' name='reg_postcode' required>
                                </div>

                            </div>
                            <div class="form-group text-center ">
                                <input type="submit" name="submit" class="btn whitecream backgroundred">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!---Register form end-->









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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"
            defer>
        </script>
    </main>

    <?php include 'PHP/footer.php';?>
</body>

</html>