

<?php session_start();?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>50,s</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.11.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='css/mdb.min.css' rel='stylesheet'>
    <!-- Your custom styles (optional) -->
    <link href='css/style.css' rel='stylesheet'>
</head>

<body class='ligthblack'>
<?php include 'PHP/navbar.php';?>

    <main class="">
        <div class='container-fluid p-5 text-center'
        style="background-image:url(http://ritxykun.com/50WEB/img/restaurantgarden.jpg);background-repeat: no-repeat;">
            <div class='row justify-content-center'>

                <?php include 'PHP/bookingstep3.php'; ?>
       

            </div>

        </div>
        




        </main>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" defer>
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" defer></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"defer>
    </script>


    <?php include 'PHP/footer.php';?>
</body>

</html>